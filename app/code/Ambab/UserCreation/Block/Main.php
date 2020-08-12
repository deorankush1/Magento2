<?php
namespace Ambab\UserCreation\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{    
    protected function _prepareLayout()
    {
	    $this->setMessage('Hello Again World');
    }

    public function getGoodbyeMessage()
	{
	    return 'Goodbye World';
	}

	#File: app/code/Pulsestorm/HelloWorldMVVM/view/frontend/templates/content.phtml    
	<h2><?php echo $this->escapeHtml($this->getGoodbyeMessage()); ?></h2>
}
