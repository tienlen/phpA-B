<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package phpA/B
 * @author  Brian Cray (Original phpA/B author)
 * @version 1.2
 * @link    phpabtest.com
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL 2.0
 */

require_once('phpab_abstract.php');
class Phpab extends phpab_abstract
{
	protected $bots;
	protected $tag = 'phpab'; // use as prefix
	protected $ga_slot = 1;
	protected $auto_ga = TRUE;

	function __construct ($params)
	{
		$n = NULL;
		$t = FALSE;
		$count = count($params);

		if($count == 1 && is_array($params))
		{
			$n = $params[0];
		}
		elseif($count >= 2)
		{
			$n = $params[0];
			$t = $params[1];
		}

		if(!is_string($n) || !is_bool($t))
		{
			throw new InvalidArgumentException('phpab library gets invalid argments');
		}

		$this->CI = get_instance();
		$this->CI->load->library('user_agent');
		parent::__construct($n, $t);
	}

	public function get_bots()
	{
		$this->bots = $this->CI->agent->robots;
	}
}
