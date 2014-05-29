<?php namespace Ahir\Former;

use \Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class Former extends IlluminateFormBuilder {

	/**
	* Label Width
	*
	* @param integer
	*/
	public static $labelWidth;

	/**
	* Control Width
	*
	* @param integer
	*/
    public static $controlWidth;

    public $former;

    /**
    * Form Open
    *
    * @param  array   $exOptions
    * @param  integer $labelWidth
    * @param  integer $controlWidth
    * @return View
    */
    public function formOpen($exOptions = array(), $labelWidth = 3, $controlWidth = 9)
    {   
        # Setting form options
        Former::$labelWidth = $labelWidth;
        Former::$controlWidth = $controlWidth;
        $options = array(
                'method' => 'POST', 
                'files' => true, 
                'class' => 'form-horizontal'
                );
        foreach ($exOptions as $key => $value) {
            $options[$key] = $value;
        }
        # Form calling
        return \Form::open($options);
    }

    /**
    * Function Name
    *
    * @param  integer
    * @return 
    */
    public function formClose()
    {
        return \Form::close();
    }

    /**
    * File Template
    * 
    * @param  string $title
    * @param  string $name
    * @param  string $class
    * @return View
    */
    public function inputFile($title = 'Dosya', $name = 'file', $class = '')
    {
    	return Former::render(
    			'input.file',
    			array(
    				'title' => $title,
    				'name' => $name,
    				'class' => $class
    				)
    		);
    }

    /**
    * Input Submit
    *
    * @param  string $title
    * @param  string $class
    */
    public function inputSubmit($title = 'Gönder', $class = 'btn-default')
    {
    	return Former::render(
    			'input.submit',
    			array(
    				'title' => $title,
    				'class' => $class
    				)
    		);
    }

    /**
    * Render
    *
    * @param  string $view
    * @param  array  $params
    * @return View
    */
    private function render($view, $params)
    {
        return \View::make("former::$view", $params)->with(Former::sizes());
    }

    /**
    * Size
    */
    private function sizes()
    {
        return array(
                'labelWidth' => Former::$labelWidth,
                'controlWidth' => Former::$controlWidth
            );
    }

}