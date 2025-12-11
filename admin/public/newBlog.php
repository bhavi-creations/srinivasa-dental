<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Srinivasa dental hospital - Dashboard</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Quill CSS -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">

        <?php include 'sidebar.php'; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include 'navbar.php'; ?>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">CREATE BLOG</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-11">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">CREATE CONTENT</h6>
                                </div>

                                <div class="card-body">
                                    <form id="addblogform" action="addBlog" method="POST" enctype="multipart/form-data">

                                        <!-- ENGLISH SECTION -->
                                        <h4 class="text-primary mt-3">English Content</h4>
                                        <hr>

                                        <!-- English Title -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">English Title</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>

                                        <!-- Select Service -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Select Service</label>
                                            <select name="service" class="form-control" required>
                                                <option value="">Select a Service</option>
                                                <option value="Root Canal">Root Canal</option>
                                                <option value="Dental Braces">Dental Braces</option>
                                                <option value="Clear Aligners">Clear Aligners</option>
                                                <option value="Dental Implants">Dental Implants</option>
                                                <option value="Crown Bridge">Crown & Bridge</option>
                                                <option value="Teeth Filling">Teeth Filling</option>
                                                <option value="Dentures">Dentures</option>
                                                <option value="Teeth Scaling">Teeth Scaling</option>
                                                <option value="Tooth Extraction">Tooth Extraction</option>
                                                <option value="Teeth Cleaning">Teeth Cleaning</option>
                                                <option value="Teeth Whitening">Teeth Whitening</option>
                                                <option value="Smile Makeover">Smile Makeover</option>
                                                <option value="Full Mouth Restoration">Full Mouth Restoration</option>
                                            </select>
                                        </div>

                                        <!-- English Main Content -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">English Main Content</label>
                                            <div id="mainEditor" style="height: 200px;"></div>
                                            <input type="hidden" name="main_content" id="mainContentData">
                                        </div>

                                        <!-- English Full Content -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">English Full Content</label>
                                            <div id="fullEditor" style="height: 300px;"></div>
                                            <input type="hidden" name="full_content" id="fullContentData">
                                        </div>

                                        <!-- Section Editors English -->
                                        <h5 class="text-primary mt-3">English Sections</h5>

                                        <div class="mb-3">
                                            <label class="form-label">Section 1</label>
                                            <div id="editor1" style="height: 150px;"></div>
                                            <input type="hidden" name="section1_content" id="sectionContent1">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Section 2</label>
                                            <div id="editor2" style="height: 150px;"></div>
                                            <input type="hidden" name="section2_content" id="sectionContent2">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Section 3</label>
                                            <div id="editor3" style="height: 150px;"></div>
                                            <input type="hidden" name="section3_content" id="sectionContent3">
                                        </div>

                                        <!-- TELUGU SECTION -->
                                        <h4 class="text-primary mt-5">Telugu Content</h4>
                                        <hr>

                                        <!-- Telugu Title -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Telugu Title</label>
                                            <input type="text" class="form-control" name="telugu_title" required>
                                        </div>

                                        <!-- Telugu Main Content -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Telugu Main Content</label>
                                            <div id="teluguMainEditor" style="height: 200px;"></div>
                                            <input type="hidden" name="telugu_main_content" id="teluguMainData">
                                        </div>

                                        <!-- Telugu Full Content -->
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Telugu Full Content</label>
                                            <div id="teluguFullEditor" style="height: 300px;"></div>
                                            <input type="hidden" name="telugu_full_content" id="teluguFullData">
                                        </div>

                                        <!-- Telugu Sections -->
                                        <h5 class="text-primary mt-3">Telugu Sections</h5>

                                        <div class="mb-3">
                                            <label>Telugu Section 1</label>
                                            <div id="teluguEditor1" style="height:150px;"></div>
                                            <input type="hidden" name="telugu_section1_content" id="teluguSection1">
                                        </div>

                                        <div class="mb-3">
                                            <label>Telugu Section 2</label>
                                            <div id="teluguEditor2" style="height:150px;"></div>
                                            <input type="hidden" name="telugu_section2_content" id="teluguSection2">
                                        </div>

                                        <div class="mb-3">
                                            <label>Telugu Section 3</label>
                                            <div id="teluguEditor3" style="height:150px;"></div>
                                            <input type="hidden" name="telugu_section3_content" id="teluguSection3">
                                        </div>

                                        <!-- COMMON IMAGES & VIDEO -->
                                        <h4 class="text-primary mt-5">Images & Video</h4>
                                        <hr>

                                        <div class="mb-3">
                                            <label>Main Image</label>
                                            <input type="file" class="form-control" name="main_image">
                                        </div>

                                        <div class="mb-3">
                                            <label>Video</label>
                                            <input type="file" class="form-control" name="video">
                                        </div>

                                        <div class="mb-3">
                                            <label>Section 1 Image</label>
                                            <input type="file" class="form-control" name="section1_image">
                                        </div>

                                        <div class="mb-3">
                                            <label>Section 2 Image</label>
                                            <input type="file" class="form-control" name="section2_image">
                                        </div>

                                        <div class="mb-3">
                                            <label>Section 3 Image</label>
                                            <input type="file" class="form-control" name="section3_image">
                                        </div>

                                        <!-- Buttons -->
                                        <button type="reset" class="btn btn-danger">Clear</button>
                                        <button type="submit" class="btn btn-success">Publish</button>

                                    </form>

                                    <!-- QUILL JS -->
                                    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

                                    <script>
                                        // English Editors
                                        const quillMain = new Quill("#mainEditor", { theme: "snow" });
                                        const quillFull = new Quill("#fullEditor", { theme: "snow" });
                                        const sections = [];
                                        for (let i = 1; i <= 3; i++) {
                                            sections[i] = new Quill("#editor" + i, { theme: "snow" });
                                        }

                                        // Telugu Editors
                                        const tqMain = new Quill("#teluguMainEditor", { theme: "snow" });
                                        const tqFull = new Quill("#teluguFullEditor", { theme: "snow" });
                                        const tSections = [];
                                        for (let i = 1; i <= 3; i++) {
                                            tSections[i] = new Quill("#teluguEditor" + i, { theme: "snow" });
                                        }

                                        // On Submit
                                        document.querySelector("#addblogform").onsubmit = function() {

                                            // English
                                            document.querySelector("#mainContentData").value = quillMain.root.innerHTML;
                                            document.querySelector("#fullContentData").value = quillFull.root.innerHTML;
                                            for (let i = 1; i <= 3; i++) {
                                                document.querySelector("#sectionContent" + i).value = sections[i].root.innerHTML;
                                            }

                                            // Telugu
                                            document.querySelector("#teluguMainData").value = tqMain.root.innerHTML;
                                            document.querySelector("#teluguFullData").value = tqFull.root.innerHTML;
                                            for (let i = 1; i <= 3; i++) {
                                                document.querySelector("#teluguSection" + i).value = tSections[i].root.innerHTML;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <footer class="sticky-footer bg-white">
                    <div class="text-center my-auto">
                        <p class="mini_text" style="color:black">
                            ©2024 SrinivasaDentalhospital. Designed by
                            <a href="https://bhavicreations.com/" target="_blank" style="color:black">Bhavi Creations</a>
                        </p>
                    </div>
                </footer>

            </div>

        </div>

    </div>

</body>

</html>
