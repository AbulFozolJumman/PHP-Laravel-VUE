<?php 
class InvoiceBuilder {
    private $filePath = "My First Invoice.txt";
    private $items = [];
    private $total = 0;
    private $title = "Invoice";

    // Add Title
    function addTitle($title) {
        $this->title = $title;
    }

    // Add Items
    function addItem($item, $price) {
        $this->items[] = [$item, (int)$price]; // Ensure price is an integer
        $this->total += (int)$price; // Update total
    }

    // Prepare Total
    function addTotal() {
        // This method is just for readability since total is already being calculated
        echo "Total price: ".$this->total."\n";
    }

    // Create Invoice File
    function createInvoice() {
        $file = fopen($this->filePath, "w");
        if (!$file) {
            echo "Error: Unable to create invoice.";
            return;
        }

        fwrite($file, $this->title . PHP_EOL);
        fwrite($file, str_repeat("-", 20) . PHP_EOL);
        foreach ($this->items as $item) {
            fwrite($file, "{$item[0]} - {$item[1]}" . PHP_EOL);
        }

        fwrite($file, str_repeat("-", 20) . PHP_EOL);
        fwrite($file, "Total = {$this->total}" . PHP_EOL);

        fclose($file);
        echo "Invoice created successfully: {$this->filePath}";
    }
}

// Usage
$invoiceBuilder = new InvoiceBuilder();
$invoiceBuilder->addTitle("My First Invoice");
$invoiceBuilder->addItem("Item 1", 400);
$invoiceBuilder->addItem("Item 2", 200);
$invoiceBuilder->addTotal();
$invoiceBuilder->createInvoice();
