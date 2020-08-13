<?php
namespace Ambab\UserCreation\Api;

use Ambab\UserCreation\Api\Data\UserItemInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface UserItemRepositoryInterface
 *
 * @api
 */
interface UserItemRepositoryInterface
{
    /**
     * Create or update a UserItem.
     *
     * @param UserItemInterface $page
     * @return UserItemInterface
     */
    public function save(UserItemInterface $page);

    /**
     * Get a UserItem by Id
     *
     * @param int $id
     * @return UserItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If UserItem with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve UserItems which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a UserItem
     *
     * @param UserItemInterface $page
     * @return UserItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If UserItem with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(UserItemInterface $page);

    /**
     * Delete a UserItem by Id
     *
     * @param int $id
     * @return UserItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
