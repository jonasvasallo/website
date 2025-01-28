<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function showLogEnrichment()
    {
        return view('log-enrichment-and-threat-detection');
    }

    public function showEnhancedReporting()
    {
        return view('enhanced-reporting');
    }

    public function showThreatHunting()
    {
        return view('threat-hunting-and-training');
    }
}
