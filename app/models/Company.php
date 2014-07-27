<?php
    require ("../app/core/config.php");
    require ("../app/core/data.php");
/**
* 	Model for table page
*/
class Company
{

	public $fields;

	public function __construct(){
		//
	}

    /*
    *   @return object all the company name and cateogry names
    *
    *
    */
    public function allCompanies(){
        $company = data::getInstance();  
        $company->query('SELECT company.name, category.name_en AS category
                        FROM company 
                        INNER JOIN category_company ON company.clientid = category_company.companyid 
                        JOIN category ON category.id = category_company.categorycode');
        $this->fields = $company->results();
        return $this->fields;            
    }

    /*
    *
    *   @return object with all the county and city names 
    *
    */
    public function allLocation(){
        $company = data::getInstance();  
        $company->query('SELECT city.name AS city, county.name AS county 
                        FROM city JOIN county 
                        ON city.idcounty = county.id');
        $this->fields = $company->results();
        return $this->fields;
    }

    /*
    *   $param $name string goes for company and category name
    *   $param $location string goes for county and city name
    *   $return object with all the companies that follow the criteria
    */
    public function searchResults($name = '', $location = ''){  //echo $name . '<br>' . $location; die();

        $name = '%' . $name .'%'; $location = '%' . $location . '%';
        $data = array($name, $name, $location, $location); 
        $result = data::getInstance();
        $result->query("SELECT 
            company.name as company,
            company.slug as slug,
            company.street as street,            
            company.housenumber as housenumber,
            category.name_en as category,
            city.name as city, 
            county.name as county            
            FROM company 
            INNER JOIN category_company 
            ON company.clientid = category_company.companyid 
            JOIN category 
            ON category.id = category_company.categorycode 
            JOIN city ON company.city = city.id 
            JOIN county ON company.county = county.id 
            WHERE 
            (company.name LIKE ? || category.name_en LIKE ?) && 
            (county.name LIKE ? || city.name LIKE ?)", $data);
        $this->fields = $result->results();
        return $this->fields;        
    }
    
    /*
    *   @param $slug string with the slug of the company page 
    *   @param lang string with the prefered language
    *   @return true or false if found
    */
    public function getCompany($slug = '',$lang ='en'){
        $field = array($slug);
        $company = data::getInstance();
        $company->query("SELECT company.name as name, 
            company.slug as slug, company.fax as fax, 
            company.additionalphones as extraphone, company.street as street, 
            company.housenumber as housenumber, category.name_en as category, 
            city.name as city, county.name as county, company.phone as phone, 
            company.email as email, company.www as www, company.opening_hours as hours, 
            company.keywords_" . $lang . " as keywords, 
            company.description_" . $lang . " as description, 
            company.trademarks_" . $lang . " as trademarks, 
            company.xcoord as xcoord, company.ycoord as ycoord 
            FROM company 
            INNER JOIN category_company 
            ON company.clientid = category_company.companyid 
            JOIN category ON category.id = category_company.categorycode 
            JOIN city ON company.city = city.id JOIN county 
            ON company.county = county.id
             WHERE company.slug = ?", $field);
        $this->fields = $company->results();
        if ($company->count()) {
            return true;
        }
        return false;
    }
}