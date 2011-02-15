<?php
/**
 * 
 *  Front Controller de test solution utilisation template sans utiliser eval
*/

/**
 * MODIFICATIONS DU 2011-02-15
 * 
 * @author jb
 * @desc J'ai tout cassé
 */
class Controller
	{
		/**
		 * Enter description here ...
		 */
		public function __construct()
		{
			$this->_run();
		}
		
		/**
		 * Called by constructor, it's the main controller
		 */
		private function _runMe()
		{
			
			$this->_render();
		}
		
		/**
		 * render the main layout
		 */
		private function _render()
		{
			$content = 'contenu';
			echo file_get_contents('../layout.phtml');
		}
	}
	