<?php

/**
 *
 * @see XenForo_ControllerPublic_Report
 */
class ThemeHouse_Reports_Extend_XenForo_ControllerPublic_Report extends XFCP_ThemeHouse_Reports_Extend_XenForo_ControllerPublic_Report
{

    /**
     *
     * @see XenForo_ControllerPublic_Report::actionView()
     */
    public function actionView()
    {
        $response = parent::actionView();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $report = $response->params['report'];

            $response->params['reportingUsers'] = $this->_getReportModel()->getReportingUsersForReport(
                $report['report_id']);
        }

        return $response;
    } /* END actionView */

    /**
     *
     * @see XenForo_ControllerPublic_Report::actionUpdate()
     */
    public function actionUpdate()
    {
        $GLOBALS['XenForo_ControllerPublic_Report'] = $this;

        return parent::actionUpdate();
    } /* END actionUpdate */
}