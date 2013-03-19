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

	function __construct ($n, $t = FALSE)
	{
		$this->CI = get_instance();
		parent::__construct($n, $t);
	}

	public function get_bots()
	{
		$this->CI->load->library('user_agent');
		$this->bots = $this->CI->user_agent->robots();
	}
}
