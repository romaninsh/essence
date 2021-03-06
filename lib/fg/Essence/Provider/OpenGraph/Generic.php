<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */

namespace fg\Essence\Provider\OpenGraph;



/**
 *	Generic OpenGraph provider.
 *
 *	@package fg.Essence.Provider.OpenGraph
 */

class Generic extends \fg\Essence\Provider\OpenGraph {

	/**
	 *	Constructor.
	 */

	public function __construct( ) {

		parent::__construct( self::anything );
	}
}
