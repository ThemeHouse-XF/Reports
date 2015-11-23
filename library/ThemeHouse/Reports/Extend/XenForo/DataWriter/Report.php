<?php

/**
 *
 * @see XenForo_DataWriter_Report
 */
class ThemeHouse_Reports_Extend_XenForo_DataWriter_Report extends XFCP_ThemeHouse_Reports_Extend_XenForo_DataWriter_Report
{

    /**
     *
     * @see XenForo_DataWriter_Report::_postSave()
     */
    protected function _postSave()
    {
        if (!empty($GLOBALS['XenForo_ControllerPublic_Report'])) {
            /* @var $controller XenForo_ControllerPublic_Report */
            $controller = $GLOBALS['XenForo_ControllerPublic_Report'];

            $input = $controller->getInput()->filter(
                array(
                    'send_alert_to_users' => XenForo_Input::ARRAY_SIMPLE,
                    'send_alert_to_users_shown' => XenForo_Input::ARRAY_SIMPLE
                ));

            if (count($input['send_alert_to_users']) < count($input['send_alert_to_users_shown'])) {
                $alertUserIds = array_keys($input['send_alert_to_users']);
                if ($this->getOption(self::OPTION_ALERT_REPORTERS) && $this->isChanged('report_state') &&
                     $this->get('report_state') == 'resolved' && $alertUserIds) {
                    $this->_getReportModel()->sendSelectedAlertsOnReportResolution($alertUserIds, $this->getMergedData(),
                        $this->getOption(self::OPTION_ALERT_COMMENT));
                } elseif ($this->getOption(self::OPTION_ALERT_REPORTERS) && $this->isChanged('report_state') &&
                     $this->get('report_state') == 'rejected' && $alertUserIds) {
                    $this->_getReportModel()->sendSelectedAlertsOnReportRejection($alertUserIds, $this->getMergedData(),
                        $this->getOption(self::OPTION_ALERT_COMMENT));
                }

                $this->setOption(self::OPTION_ALERT_REPORTERS, false);
            }
        }

        parent::_postSave();
    } /* END _postSave */
}