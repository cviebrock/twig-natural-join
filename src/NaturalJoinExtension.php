<?php

namespace Cviebrock\Twig;

class NaturalJoinExtension extends \Twig_Extension {

		/**
		 * Return extension name
		 *
		 * @return string
		 */
		public function getName()
		{
			return 'cviebrock/natural-join';
		}


		/**
		 * Callback for Twig
		 * @ignore
		 */
		public function getFilters()
		{
			return array(
				'naturaljoin' => new \Twig_Filter_Method($this, 'naturalJoin')
			);
		}


		public function naturalJoin($array, $seperator, $final_seperator, $oxford=false)
		{
			if ($array instanceof Traversable) {
				$array = iterator_to_array($array, false);
			}

			// one element? just return it
			if (count($array)==1) {
				return reset($array);
			}

			// two elements? only use the final_seperator
			if (count($array)==2) {
				return implode($final_seperator, $array);
			}

			// more than 2 elements, so strip off the last one
			// and join the rest using the normal seperator
			$last = array_pop($array);
			$first = implode($seperator, $array);


			// return the list
			// (if using the "oxford" method, add another seperator before the
			// final seperator

			return $first .
				($oxford ? $seperator : '') .
				$final_seperator .
				$last;

		}

}
