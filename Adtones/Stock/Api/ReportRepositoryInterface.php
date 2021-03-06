<?php


namespace Adtones\Stock\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ReportRepositoryInterface
{

    /**
     * Save Report
     * @param \Adtones\Stock\Api\Data\ReportInterface $report
     * @return \Adtones\Stock\Api\Data\ReportInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Adtones\Stock\Api\Data\ReportInterface $report
    );

    /**
     * Retrieve Report
     * @param string $reportId
     * @return \Adtones\Stock\Api\Data\ReportInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($reportId);

    /**
     * Retrieve Report matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Adtones\Stock\Api\Data\ReportSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Report
     * @param \Adtones\Stock\Api\Data\ReportInterface $report
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Adtones\Stock\Api\Data\ReportInterface $report
    );

    /**
     * Delete Report by ID
     * @param string $reportId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($orderId);
}
