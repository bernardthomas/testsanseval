<?php
/**
 * 
 *  Front Controller de test solution utilisation template sans utiliser eval
*/

/**
 * MODIFICATIONS DU 2011-02-15
 * 
 * @author jb
 * @desc J'ai tout cass�
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
		 * 
		 */
		private function _run() // Why did u that ?
		{
			
			$this->_render();
		}
		
		/**
		 * render the main layout
		 */
		private function _render()
		{
			$content = 'contenu';
			require_once'../layout.phtml';
		}
	}
	