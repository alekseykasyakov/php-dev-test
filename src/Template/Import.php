<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class Import extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
    <div><p>Imported files was successfully!</p></div>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
