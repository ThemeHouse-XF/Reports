<?php

class ThemeHouse_Reports_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/Reports/Extend/XenForo/ControllerPublic/Report.php' => '7ed77f88a69444f7f2d63654609a5a13',
                'library/ThemeHouse/Reports/Extend/XenForo/DataWriter/Report.php' => 'a6cf0e4a208793234c11f050f673260b',
                'library/ThemeHouse/Reports/Extend/XenForo/Model/Report.php' => '795b4b79f65e1ad26df2b2196c15b0d3',
                'library/ThemeHouse/Reports/Install/Controller.php' => '7f0b865667d55dfa11837f5b2128149b',
                'library/ThemeHouse/Reports/Listener/LoadClass.php' => 'f521d980b141071e1dba1f4bbb06e210',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}