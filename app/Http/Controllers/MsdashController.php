<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MsdashController extends Controller
{
  public function welcome()
  {
    $viewData = $this->loadViewData();

    return view('msdash.index', $viewData);
  }
}