<?php
namespace meigo\modules;

use std, gui, framework, meigo;


class form extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $a = $this->fpp->text;
        $this->form("form")->title = "(FPS: ".$a.") Авторизация | Dekstop Client v1.0.0 [RELEASE]";
        $this->fpp->text = 0;
    }

    /**
     * @event timerAlt.action 
     */
    function doTimerAltAction(ScriptEvent $e = null)
    {    
        $a = app()->form("MainForm")->browser->engine->location;
        $b = app()->form("MainForm")->browser->engine->state;
        $c = app()->form("MainForm")->browser->engine->history->currentIndex;
        $d = app()->form("MainForm")->browser->engine->title;
        
        if ($a == "https://myopengpt.com/chat"){
            //
            echo $a."\n";
            app()->form("MainForm")->blockrect->free();
        }
        echo "[INFO] ".$a."\n";
        echo "[INFO] ".$b."\n";
        echo "[INFO] ".$c."\n";
        echo "[INFO] ".$d."\n";
    }

}
