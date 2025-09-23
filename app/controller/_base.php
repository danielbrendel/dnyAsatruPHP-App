<?php 

/**
 * Base controller class
 * 
 * Extend or modify to fit your project needs
 */
class BaseController extends Asatru\Controller\Controller {
	/**
	 * @var string
	 */
	protected $layout = 'layout';

	/**
	 * Perform base initialization
	 * 
	 * @param $layout
	 * @return void
	 */
	public function __construct($layout = '')
	{
		if ($layout !== '') {
			$this->layout = $layout;
		}
	}

	/**
	 * A more convenient view helper
	 * 
	 * @param array $yields
	 * @param array $attr
	 * @return Asatru\View\ViewHandler
	 */
	public function view($yields, $attr = array())
	{
		return view($this->layout, $yields, $attr);
	}

	/**
	 * Respond and exit helper
	 * 
	 * @param $content
	 * @return never
	 */
	public function respond($content, $httpcode = 200, $conttype = '')
	{
		if (strlen($conttype) > 0) {
			header('Content-Type: ' . $conttype);
		}

		http_response_code($httpcode);

		if ($content instanceof Asatru\View\ViewInterface) {
			echo $content->out(true);
		} else {
			echo $content;
		}

		exit();
	}
}