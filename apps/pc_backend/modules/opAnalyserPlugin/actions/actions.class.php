<?php
/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opAnalyserPlugin actions.
 *
 * @package    OpenPNE
 * @subpackage opAnalyserPlugin
 * @author     Hiromi Hishida <info@77-web.com>
 */

class opAnalyserPluginActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new opAnalyserPluginConfigForm();
    if ($request->isMethod(sfWebRequest::POST))
    {
      $this->form->bind($request->getParameter('analyser_plugin_config'));
      if ($this->form->isValid())
      {
        $this->form->save();
        $this->redirect('opAnalyserPlugin/index');
      }
    }

  }
}