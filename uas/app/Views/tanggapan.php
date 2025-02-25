<html>

<head>
    <meta charset="UTF-8">
    <link href="<?= base_url('css/stylefix.css') ?>" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="logo-container">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1107e6ae3e0c4ffc75a966ee66cb08b8c2211ec669962e10fe7c3aa7d7a9c2ff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                alt="University Logo" class="logo">
            <div class="logo-text">
                <span class="university-name">Fakultas Teknik</span>
                <span class="faculty-name">Universitas Lambung Mangkurat</span>
            </div>
        </div>
        <div class="search-bar">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/413e5cc496fa41cde703fccff3798ef6d2b9e7d8ba3cf4d88385979ad6375060?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                alt="Search Icon" class="search-icon">
            <span>Cari Layanan...</span>
        </div>
        <div class="user-info">
            <div class="notification-icon">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/25771309cdb260988e61996623d886458102f7e2ab6fed10a0fa21be1c7f4a0a?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                    alt="Notification Icon" class="menu-icon">
            </div>
            <div class="user-profile">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/853bbc0819994faa9a2050eb7ed7e58b892a6642457e2d21275bcb5e0a032bc5?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                    alt="User Avatar" class="user-avatar">
                <span> <?= session()->get('nama') ?></span>
            </div>
        </div>
    </header>
    <div class="flex-container">
        <aside>
            <nav class="sidebar-content">
                <h2 class="menu-header">Menu</h2>
                <a href="#" class="menu-item menu-item-active">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23004516897fd89185417a24df5acd2efde7ada021f51aab905ec7013a0973b6?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Dashboard</span>
                </a>
                <h3 class="menu-header">Layanan</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/909303d04b13c4acdfb2bb01bbaaedf0e71d42d4e2bf6ab9ed92b70d463a1b58?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Services</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/54841956b91c3a2b13b141b520d2691772abcb6dec3811da97999e14199b6753?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Command Center</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/318e321b6fd55843b33e1681cc0913c190905de5a4bdb7991de9c9cf1ef7fd3c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Response</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a964d722666545a042baf2f0b0397bead9636984f60422d7df7814e82b361c7f?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Commerce</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d671927639c5ee40b4c7229ed2cb85fd3a37cb9e9b36cedbcaa9f595e0d40bff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Office</span>
                </a>
                <h3 class="menu-header">Other</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b12d8c8eb208bff01c27d17403c7a6bb41a6c6727d2b5d13ec0e2237152d88c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Kuisioner</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/422190efdeea378ad4c6fca0dbda3a8481c2f22eae302e129275831406912fea?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">FAQ</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/dd53464b406c2f4142d4492ebedc4cce680b02e10192833514de60977148dae1?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Profile</span>
                </a>
                <a href="<?= base_url('login') ?>" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9cb424fbc848abd359c1a5e087aa8b264a3f19718a8ba4e083fb1568891b35df?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Logout</span>
                </a>
            </nav>
        </aside>
        <main>
            <div class="content">
                <a href="<?= base_url('layananft/tanyaft')?>" class="back-button">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/56b0e97e03d1a545d2a516906aa5a04969cc559ff326afef2943428b84cd6f2d?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="Back Arrow" class="menu-icon">
                    <span>Kembali</span>
                </a>
                <div class="divider"></div>
                <h1 class="section-title-tengah">Tanggapan Tanya FT</h1>
                <section class="question-container">
                    <h2 class="question-label">Pertanyaan</h2>
                    <span class="question-colon">:</span>
                    <div class="question-content">
                        <p class="question-text">
                            Apa saja keuntungan layanan FT ULM yang baru dibuat ini?
                        </p>
                        <button class="check-file-button" tabindex="0">
                            Cek File
                        </button>
                    </div>
                </section>
                <section class="question-container">
                    <h2 class="question-label">Jawaban</h2>
                    <span class="question-colon">:</span>
                    <div class="question-content">
                        <p class="question-text">
                        Website layanan baru FT ULM dirancang untuk memberikan akses yang mudah dan cepat bagi mahasiswa, dosen, dan staf untuk mengakses berbagai layanan akademik dan administratif. Dengan antarmuka yang responsif dan ramah pengguna, pengguna dapat dengan mudah mengajukan permohonan, mengakses informasi akademik, memantau status pengajuan, dan berinteraksi dengan berbagai fitur lainnya secara efisien.
                        </p>
                    </div>
                </section>



            </div>

        </main>
    </div>
</body>

</html>