<?php

namespace Application\Innovare\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationInnovareCoreBundle extends Bundle
{
	public function getParent()
	{
		return 'ApplicationSonataPageBundle';
	}
}
