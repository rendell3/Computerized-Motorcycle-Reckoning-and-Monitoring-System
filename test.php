<?php

//- Variables - for your RPT and PDF
$my_report = "C:\\xampp\\htdocs\\rpt\\Report1.rpt"; // 
//rpt source file
$my_pdf = "C:\\xampp\\htdocs\\rpt\\Report1.pdf"; // RPT export to pdf file
//-Create new COM object-depends on your Crystal Report version
$ObjectFactory= new COM("CrystalReports115.ObjectFactory.1") or die ("Error on load"); // call COM port
$crapp = $ObjectFactory-> CreateObject("CrystalDesignRunTime.Application"); // create an instance for Crystal
$creport = $crapp->OpenReport($my_report, 1); // call rpt report

// to refresh data before

//- Set database logon info - must have
//$creport->Database->Tables(1)->SetLogOnInfo("localhost", "emotors", "root", "");

//- field prompt or else report will hang - to get through
$creport->EnableParameterPrompting = 10;

//- DiscardSavedData - to refresh then read records
$creport->DiscardSavedData;
$creport->ReadRecords();

    
//export to PDF process
$creport->ExportOptions->DiskFileName=$my_pdf; //export to pdf
$creport->ExportOptions->PDFExportAllPages=true;
$creport->ExportOptions->DestinationType=1; // export to file
$creport->ExportOptions->FormatType=31; // PDF type
$creport->Export(false);

//------ Release the variables ------
$creport = null;
$crapp = null;
$ObjectFactory = null;

echo "<a href = 'rpt/Report1.pdf' target = '_blank'>Preview</a>";    
?>