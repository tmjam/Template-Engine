<?php

/********************************************
    Document   : Template Class
    Created on : February 23, 2013, 9:18 AM
    Author     : Tauseef Jamadar
    Description:
        Template Class to manage and render any template
*********************************************/

/**
 * Template Class to manage any template
 * Note: templates must be in html format and variables must be present within []
 */
class template {
    
    /*
     * private collection of variables not to be expose
     */
    private $variableCollection = array();
    
    /**
     * Assign values to the template variables
     * @param type $key  key name for the template variable
     * @param type $value  value for the key template variable
     */
    public function assign($key, $value)
    {
        $this->variableCollection[$key] = $value;
    }
    
    
    /**
     * Renders the specified template by replacing the variables with their corresponding values
     * @param type $templateName Template to be rendered
     */
    public function renderTemplate($templateName)
    {
        $path = $templateName.'.html';
        
        if(file_exists($path))
        {
            $contents = file_get_contents($path);
            
            //Replace the variables in template with their values
            foreach ($this->variableCollection as $key => $value)
            {
                $contents = preg_replace('/\['.$key.'\]/', $value, $contents);
            }
            
            eval ('?>'.$contents.'<?php ');
        }
        else {
            exit('<h1>Template Error !</h1>');
        }
    }
}

?>
