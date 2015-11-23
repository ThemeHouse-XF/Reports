<?php

class ThemeHouse_Reports_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_Reports' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Report'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_Report'
                ), /* END 'datawriter' */
                'model' => array(
                    'XenForo_Model_Report'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_Reports' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Reports_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Reports_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Reports_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */
}