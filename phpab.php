<?php
/**
 * @package phpA/B
 * @author  Brian Cray (Original phpA/B author)
 * @version 1.2
 * @link    phpabtest.com
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL 2.0
 */

require_once('phpab_abstract.php');
class phpab extends phpab_abstract
{
	protected $bots;
	protected $tag = 'phpab'; // use as prefix
	protected $ga_slot = 1;
	protected $auto_ga = TRUE;

	function __construct ($n, $t = FALSE)
	{
		parent::__construct($n, $t);
	}

	public function get_bots(){
		$this->bots = array(
			'googlebot',
			'msnbot',
			'slurp',
			'ask jeeves',
			'crawl',
			'ia_archiver',
			'lycos',
		);
	}
}
