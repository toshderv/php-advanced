<?php


use Patterns\Bridge\Formatter\JsonFormatter;
use Patterns\Bridge\Formatter\PdfFormatter;
use Patterns\Bridge\Formatter\XmlFormatter;
use Patterns\Bridge\Report\OrderReport;
use Patterns\Bridge\Report\ProductReport;
use Patterns\Bridge\Report\ReportAbstract;
use Patterns\Bridge\Report\UserReport;

include '../../vendor/autoload.php';


//$report = new OrderReport(new JsonFormatter());
//$report = new UserReport(new JsonFormatter());
//$report = new OrderReport(new XmlFormatter());
//$report = new OrderReport(new PdfFormatter());
$report = new ProductReport(new PdfFormatter());

sendReport($report);

function sendReport(ReportAbstract $report)
{
    $report->generate();
}