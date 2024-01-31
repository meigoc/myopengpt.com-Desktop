<?php
namespace meigo\forms;

use std, gui, framework, meigo;


class form extends AbstractForm
{

    /**
     * @event fpp.step 
     */
    function doFppStep(UXEvent $e = null)
    {    
        $this->fpp->text += 1;
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->timer->start();
        $this->timerAlt->start();
    }

}
