<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class PostDetails extends Layout
{
    protected function renderPage(Context $context): string
    {
        $parseBody = new \Parsedown();
        // @codingStandardsIgnoreStart
        return <<<HTML
            <div>
                <h1>{$context->title}</h1>
                <pre>{$parseBody->text($context->getBody())}</pre>
                <p>Author: {$context->getAuthor()}</p>
            </div>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
