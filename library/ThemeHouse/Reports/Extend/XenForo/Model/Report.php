<?php

/**
 *
 * @see XenForo_Model_Report
 */
class ThemeHouse_Reports_Extend_XenForo_Model_Report extends XFCP_ThemeHouse_Reports_Extend_XenForo_Model_Report
{

    public function sendSelectedAlertsOnReportResolution(array $alertUserIds, array $report, $comment = '')
    {
        $handler = $this->getReportHandler($report['content_type']);
        if (!$handler) {
            return;
        }

        $report = $handler->prepareReport($report);

        $users = $this->getReportingUsersForReport($report['report_id']);
        foreach ($users as $userId => $user) {
            XenForo_Model_Alert::alert($user['user_id'], 0, '', 'user', $user['user_id'], 'report_resolved',
                array(
                    'comment' => in_array($userId, $alertUserIds) ? $comment : '',
                    'title' => htmlspecialchars_decode(strval($report['contentTitle'])),
                    'link' => strval($report['contentLink'])
                ));
        }
    } /* END sendSelectedAlertsOnReportResolution */

    public function sendSelectedAlertsOnReportRejection(array $alertUserIds, array $report, $comment = '')
    {
        $handler = $this->getReportHandler($report['content_type']);
        if (!$handler) {
            return;
        }

        $report = $handler->prepareReport($report);

        $users = $this->getReportingUsersForReport($report['report_id']);
        foreach ($users as $userId => $user) {
            XenForo_Model_Alert::alert($user['user_id'], 0, '', 'user', $user['user_id'], 'report_rejected',
                array(
                    'comment' => in_array($userId, $alertUserIds) ? $comment : '',
                    'title' => htmlspecialchars_decode(strval($report['contentTitle'])),
                    'link' => strval($report['contentLink'])
                ));
        }
    } /* END sendSelectedAlertsOnReportRejection */
}