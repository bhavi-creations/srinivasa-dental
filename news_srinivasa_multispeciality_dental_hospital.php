<?php
include './db.connection/db_connection.php';

$pdf_sql = "SELECT title, pdf_path FROM pdf_uploads";
$pdf_result = $conn->query($pdf_sql);
?>

<?php include 'navbar.php'; ?>

<main id="main">
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>News Letter</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                if ($pdf_result->num_rows > 0) {
                    while ($pdf_row = $pdf_result->fetch_assoc()) {
                        $pdf_filename = trim($pdf_row['pdf_path']); // Remove extra spaces
                        $pdf_path = "admin/uploads/pdf/" . $pdf_filename; // Construct correct path

                        // Check if the file exists before displaying
                        if (!empty($pdf_filename) && file_exists(__DIR__ . "/$pdf_path")) {
                            echo '<div class="col-12 col-md-4 my-2">';
                            echo '<div class="pdf-container">';
                            echo '<p class="text-center mt-3 text-primary" style="font-size: 20px; font-family: Poppins, sans-serif; font-weight: 600;">'
                                . htmlspecialchars($pdf_row['title']) .
                                '</p>';

                            echo '<embed src="' . $pdf_path . '" type="application/pdf" width="100%" height="400px" />';
                            echo '<br>';
                            echo '<div class="d-flex justify-content-center">';
                            echo '<a href="' . $pdf_path . '" class="btn btn-success mt-2" target="_blank">Open PDF</a>';
                            echo '</div>';                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo "<p class='text-danger'>PDF not found: $pdf_filename</p>";
                        }
                    }
                } else {
                    echo "<p class='text-danger'>No PDF files found.</p>";
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>