<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('components/header') ?>
    <style>
        html, body {
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        #app {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        #main {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            padding: 1rem;
            text-align: center;
        }

    </style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>


    <div id="app">
        <?= $this->include('components/sidebar') ?>
        
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <?= $this->renderSection('content') ?>
            <?php sweetAlert(); ?>
        </div>
       
       
        <?= $this->include('components/footer') ?>
    </div>
</body>
</html>