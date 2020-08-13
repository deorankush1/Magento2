<?php
namespace Ambab\UserCreation\Controller\Hello;

use Ambab\UserCreation\Model\NewCustomTable as DatabaseTable;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class World extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_insertData;

    public function __construct(Context $context, PageFactory $pageFactory, DatabaseTable $insertData)
    {
        $this->_pageFactory = $pageFactory;
        $this->_insertData = $insertData;
         
        return parent::__construct($context);
    }

   
    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {

        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $data['name']   = $post['name'];
            $data['mobile']   = isset($post['mobile'])?$post['mobile']:"";
            $data['age']       = isset($post['age'])?$post['age']:"";
            $data['gender'] = isset($post['gender'])?$post['gender']:"";

            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/UserCreation.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);
            $logger->info('Simple Text Log'); // Simple Text Log
            $logger->info('Array Log'.print_r($post, true)); // Array Log
            // Doing-something with...

            /*$model = $this->_insertData->create();
            $model->addData([
            "name" => $name,
            "mobile" => $mobile,

            ]);
            $saveData = $model->save();*/
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $question = $objectManager->create('Ambab\UserCreation\Model\NewCustomTable');
            $question->setData($data);
            //$question->setEmail('test@test.com');
            //$question->setQuery('Question Description');
            $question->save();

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Booking done !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/ambab_user/hello/lists');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
