<style>
    #fileManager .first {
        min-width: 12rem;
        max-width: 12rem;
    }
    #fileManager .second {
        min-width: 10rem;
        max-width: 10rem;
    }
    #fileManager .third {
        min-width: 10rem;
        max-width: 10rem;
    }
    #fileManager table {
        text-wrap: nowrap;
    }
    #fileManager tbody::before {
        content: "";
        display: table-row;
        height: 0.4rem; /* Adjust the value as needed */
    }
    #fileManager tbody tr {
        /* background: var(--color-ekadash); */
    }
    #fileManager .hover-opacity-1:hover {
        opacity: 1 !important;
    }
    .upload-file {
        position: absolute;
        top: 0;
        height: 66vh;
        box-shadow: var(--box-shadow);
        transition: none;
    }
    .upload-file.dropping {
        background: var(--bs-warning-bg-subtle) !important;
    }
    #uploadFileContainer {
        /* transform: scale(0.2); */
        visibility: hidden;
        opacity: 0;
    }
    #uploadFileContainer.pragat {
        /* transform: scale(1.015); */
        visibility: visible;
        opacity: 1;
    }
</style>
<div class="file-manager-container position-relative">
    <div class="file-manager-view max-width-100 mx-auto position-relative" style="width: 1000px;">
        <div id="fileManager" class="overflow-x-auto">
            <table class="w-100">
                <thead>
                    <tr class="py-2 text-dvitiya" style="border-bottom: 1px solid var(--color-dvitiya);">
                        <th class="fw-500 py-2 click" style="min-width: 3rem;"><i id="backBtn" class="fa-solid fa-arrow-left cursor-pointer ms-2 ms-md-3 d-none"></i></th>
                        <th class="fw-600 py-2 pe-2 first ps-2 ps-md-3">Name</th>
                        <th class="fw-500 py-2 pe-2">Type</th>
                        <th class="fw-500 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody id="fileList"></tbody>
            </table>    
        </div>
        <style>
            #fileManagerLoader #editorLoader {
                position: absolute;
                translate: -50% -50%;
            }
        </style>
        <div id="fileManagerLoader"></div>
    </div>
    <label for="uploadFile" id="uploadFileContainer" class="upload-file bg-warning rounded-4 border w-100 flex-column-middle-center text-center">
        <div id="uploadFileMainContainer" class="d-nonse">
            <div class="flex-column-middle-center cursor-pointer">
                <div class="max-width-100 mb-2" style="width: 100px;">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <h5 class="mb-2 text-pratham fw-500">Drop or Click to Upload File</h5>
                <input type="file" name="uploaded-file" id="uploadFile" class="d-none">
            </div>
        </div>
        <style>
            #uploadFileContainer #editorLoader span {
                background-color: var(--color-ashtami);
            }
        </style>
        <div id="uploadFileLoader"></div>
    </label>
</div>

<!-- <tbody>
    <tr>
        <td class="cursor-pointer" style="width: 40px;">
            <div class="w-100 py-1"><img src="https://cdn-icons-png.flaticon.com/128/3735/3735161.png" alt="Bhavishya Malika Official Folder Icon" class="w-100 h-100"></div>
        </td>
        <td class="cursor-pointer ps-2 ps-md-3"><div class=" h5 mb-0">files</div></td>
        <td class="cursor-pointer"><div class="">Folder</div></td>
        <td class="cursor-pointer"><div class="">4 MB</div></td>
        <td>
            <div class="flex-middle gap-2 gap-md-3 color-shashthi h5 mb-0">
                <span class="click cursor-pointer invisible opacity-0">
                    <i class="fa-regular fa-copy"></i>
                    <i class="fa-solid fa-check d-none"></i>
                </span>
                <span class="click cursor-pointer"><i class="fa-regular fa-pen-to-square"></i></span>
                <span class="click cursor-pointer"><i class="fa-solid fa-trash-can text-danger"></i></span>
            </div>
        </td>
    </tr>
    <tr>
        <td class="cursor-pointer" style="width: 40px;">
            <div class="w-100 py-1"><img src="<?=base_url() ?>public/favicon.ico" alt="Bhavishya Malika Official Folder Icon" class="w-100 h-100"></div>
        </td>
        <td class="cursor-pointer ps-2 ps-md-3"><div class=" h5 mb-0">favicon.ico</div></td>
        <td class="cursor-pointer"><div class="">ICO</div></td>
        <td class="cursor-pointer"><div class="">4 MB</div></td>
        <td>
            <div class="flex-middle gap-2 gap-md-3 color-shashthi h5 mb-0">
                <span class="click cursor-pointer" onclick="copy(this, 'sfasf')">
                    <i class="fa-regular fa-copy"></i>
                    <i class="fa-solid fa-check d-none"></i>
                </span>
                <span class="click cursor-pointer"><i class="fa-regular fa-pen-to-square"></i></span>
                <span class="click cursor-pointer"><i class="fa-solid fa-trash-can text-danger"></i></span>
            </div>
        </td>
    </tr>
    <tr>
        <td class="cursor-pointer" style="width: 40px;">
            <div class="w-100 py-1"><img src="<?=base_url() ?>public/favicon-32x32.png" alt="Bhavishya Malika Official Folder Icon" class="w-100 h-100"></div>
        </td>
        <td class="cursor-pointer ps-2 ps-md-3"><div class=" h5 mb-0">favicon-32x32.png</div></td>
        <td class="cursor-pointer"><div class="">PNG</div></td>
        <td class="cursor-pointer"><div class="">1.2 MB</div></td>
        <td>
            <div class="flex-middle gap-2 gap-md-3 color-shashthi h5 mb-0">
                <span class="click cursor-pointer" onclick="copy(this, 'sfasf')">
                    <i class="fa-regular fa-copy"></i>
                    <i class="fa-solid fa-check d-none"></i>
                </span>
                <span class="click cursor-pointer"><i class="fa-regular fa-pen-to-square"></i></span>
                <span class="click cursor-pointer"><i class="fa-solid fa-trash-can text-danger"></i></span>
            </div>
        </td>
    </tr>
</tbody> -->

<!-- <div class="flex-middle text-nowrap gap-2 py-2" style="border-bottom: 1px solid var(--color-dvitiya);">
    <span class="mb-0 first h5 fw-500 ms-3 ms-md-5">Name</span>
    <span class="mb-0 second">Size</span>
    <span class="mb-0 third">Type</span>
    <span class="mb-0 fourth">Last Modified</span>
</div> -->
<script>
    const fileManagerLoaderHtml = `
        <div class="workarea-loader">
            <div class="editorLoaderContainer position-relative" style="min-height: 50vh;">
                <div class="spinner-border text-tritiya" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    `;
    const uploadFileContainer = document.getElementById('uploadFileContainer');
    const fileInput = document.getElementById('uploadFile');
    const urlButton = uploadFileContainer.querySelector('.urlButton');
    const uploadFileMainContainer = uploadFileContainer.querySelector('#uploadFileMainContainer');
    let currentPath = '';

    document.addEventListener('DOMContentLoaded', () => {
        const backButton = document.getElementById('backBtn');

        backButton.addEventListener('click', () => {
            const pathArray = currentPath.split('/').filter(Boolean);
            pathArray.pop(); // Remove the last directory
            const newPath = pathArray.length ? '/' + pathArray.join('/') : '';
            listFiles(newPath);
        });

        // Initial call to list files
        // listFiles();
    });

    uploadFileContainer.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadFileContainer.classList.add('dropping');
    });

    uploadFileContainer.addEventListener('dragleave', () => {
        uploadFileContainer.classList.remove('dropping');
    });
    
    uploadFileContainer.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadFileContainer.classList.remove('dropping');
        handleFileUpload(e.dataTransfer.files[0]);
    });

    fileInput.addEventListener('change', (e) => {
        handleFileUpload(e.target.files[0]);
    });

    if(urlButton) {
        urlButton.addEventListener('click', () => {
            const url = prompt('Enter the file or image URL:');
            if (url) {
                handleUrlUpload(url);
            }
        });
    }

    function handleFileUpload(file) {
        if (file.size > 7 * 1024 * 1024) { // Check if file is less than 7 MB
            alert('File size should be less than 7 MB');
            return;
        }

        const formData = new FormData();
        formData.append('uploaded-file', file);
        formData.append('path', currentPath);

        uploadFileMainContainer.classList.add("d-none");
        uploadFileLoader.innerHTML = fileManagerLoaderHtml;

        fetch(`${BASE_URL}filemanager/uploadFile`, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                listFiles(currentPath);
            } else {
                alert(data.message);
            }
            
            uploadFileContainer.classList.remove("pragat");
            uploadFileLoader.innerHTML = "";
            uploadFileMainContainer.classList.remove("d-none");
        })
        .catch(error => {
            console.error('Error uploading file:', error);
            alert('There was an error uploading the file. Please try again.');
            uploadFileMainContainer.classList.remove("d-none");
            uploadFileLoader.innerHTML = "";
        });
    }

    function handleUrlUpload(url) {
        const body = JSON.stringify({ url, path: currentPath });

        uploadFileContainer.classList.remove('pragat');
        document.getElementById('fileManagerLoader').innerHTML = fileManagerLoaderHtml;

        fetch(`${BASE_URL}filemanager/uploadFromUrl`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                listFiles(currentPath);
            } else {
                alert(data.message);
            }
            uploadFileContainer.classList.remove("pragat");
            uploadFileLoader.innerHTML = "";
            uploadFileMainContainer.classList.remove("d-none");
        })
        .catch(error => {
            console.error('Error uploading from URL:', error);
            alert('There was an error uploading the file. Please try again.');
            uploadFileMainContainer.classList.remove("d-none");
            uploadFileLoader.innerHTML = "";
        });
    }

    function listFiles(path = '') {
        // console.log("Requesting path:", path);
        const fileList = document.getElementById('fileList');
        const backButton = document.getElementById('backBtn');
        document.getElementById('fileManager').classList.add("d-none");
        document.getElementById('fileManagerLoader').innerHTML = fileManagerLoaderHtml;

        fetch(`${BASE_URL}filemanager/listFiles`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ path }),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // console.log("Received data: ", data);
            document.getElementById('fileManager').classList.remove("d-none");
            document.getElementById('fileManagerLoader').innerHTML = "";
            fileList.innerHTML = '';
            currentPath = path;
            toggleBackButtonVisibility();

            let iconSrc = "";
            data.forEach(file => {
                const fileType = file.type === 'directory' ? 'Folder' : file.name.split('.').pop().toUpperCase();
                switch (fileType) {
                    case "Folder":
                        iconSrc = `${BASE_URL}public/images/icons/folder.png`;
                        break;
                    case "PDF":
                        iconSrc = `${BASE_URL}public/images/icons/pdf.png`;
                        break;
                    case "PNG":
                    case "JPG":
                    case "JPEG":
                    case "WEBP":
                    case "GIF":
                    case "SVG":
                    case "ICO":
                        iconSrc = `${BASE_URL}public${file.path}`; 
                        break;
                    default: 
                        iconSrc = `${BASE_URL}public/images/icons/file.png`;
                        break;
                }
                const iconHTML = `<td class="cursor-pointer" style="width: 40px;" ${fileType == "Folder" ? `onclick="listFiles('${file.path}')"` : ""}>
                                    <${fileType !== "Folder" ? `a href="${BASE_URL}public${file.path}" target="_blank"` : "div"} class="w-100 py-1 overflow-hidden flex-middle-center" style="min-width: 100%; max-height: 4rem;"><img src="${iconSrc}" alt="Icon Bhavishya Malika Official" class="w-100 h-100"></${fileType !== "Folder" ? "a" : "div" }>
                                </td>`;
                const nameHTML = `<td class="cursor-pointer pe-3 ps-2 ps-md-3" ${fileType == "Folder" ? `onclick="listFiles('${file.path}')"` : ""}><a ${fileType !== "Folder" ? `href="${BASE_URL}public${file.path}" target="_blank"` : ""} class="h5 mb-0 text-decoration-none">${file.name.length > 30 ? file.name.substring(0, 30) + '...' : file.name} ${fileType !== "Folder" ? `<i class="fa-solid fa-arrow-up-right-from-square mt-1" style="font-size: 0.7rem; vertical-align: top;"></i>` : ''} </a></td>`;
                const typeHTML = `<td class="cursor-pointer pe-3"><div class="">${fileType}</div></td>`;
                const actionsHTML = `<td>
                                        <div class="flex-middle gap-2 gap-md-3 color-shashthi h5 mb-0">
                                            <span class="click cursor-pointer" onclick="deleteFile('${file.path}')"><i class="fa-solid fa-trash-can fa-sm text-danger opacity-50 hover-opacity-1"></i></span>
                                            ${file.type === 'directory' ? '' : `<span class="click cursor-pointer" onclick="copy(this, '${BASE_URL}public${file.path}')"><i class="fa-regular fa-copy"></i><i class="fa-solid fa-check d-none"></i></span>`}
                                        </div>
                                    </td>`;
                const tr = document.createElement('tr');
                tr.innerHTML = iconHTML + nameHTML + typeHTML + actionsHTML;
                fileList.appendChild(tr);
            });
        })
        .catch(error => {
            console.error('Error fetching files:', error);
            alert('There was an error fetching the files. Please try again.');
            fileList.style.cursor = 'default';
        });
    }

    function toggleBackButtonVisibility() {
        const backButton = document.getElementById('backBtn');
        if (currentPath === '') {
            backButton.classList.add('d-none');
        } else {
            backButton.classList.remove('d-none');
        }
    }

    function formatSizeUnits(bytes) {
        let size;
        if (bytes >= 1073741824) {
            size = (bytes / 1073741824).toFixed(1) + ' GB';
        } else if (bytes >= 1048576) {
            size = (bytes / 1048576).toFixed(1) + ' MB';
        } else if (bytes >= 1024) {
            size = (bytes / 1024).toFixed(1) + ' KB';
        } else if (bytes > 1) {
            size = bytes + ' bytes';
        } else if (bytes === 1) {
            size = bytes + ' byte';
        } else {
            size = '0 bytes';
        }

        // Remove '.0' if the value is an integer
        size = size.replace('.0', '');

        return size;
    }

    function copy(btn, value) {
        const textarea = document.createElement('textarea');
        // console.log(value);
        textarea.value = value;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        btn.querySelector(".fa-copy").classList.add("d-none");
        btn.querySelector(".fa-check").classList.remove("d-none");
        setTimeout(() => {
            btn.querySelector(".fa-check").classList.add("d-none");
            btn.querySelector(".fa-copy").classList.remove("d-none");
        }, 2000)
    }

    function deleteFile(filePath) {
        if (confirm('Are you sure you want to delete this file/folder?')) {
            fetch(`${BASE_URL}filemanager/deleteFile`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ filePath })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    listFiles(currentPath);
                } else {
                    alert(data.message);
                }
            });
        }
    }

    function renameFile(filePath) {
        const fileName = filePath.split('/').pop();
        const fileExtension = fileName.includes('.') ? fileName.split('.').pop() : '';
        const fileBaseName = fileName.replace(`.${fileExtension}`, '');

        const newName = prompt('Enter the new name:', fileBaseName);
        if (newName) {
            const newPath = fileExtension ? `${currentPath}/${newName}.${fileExtension}` : `${currentPath}/${newName}`;
            checkAndRenameFile(filePath, newPath, 0);
        }
    }

    function checkAndRenameFile(oldPath, newPath, count) {
        let newNamePath = newPath;
        if (count > 0) {
            const pathParts = newPath.split('/');
            const namePart = pathParts.pop();
            const [baseName, extension] = namePart.includes('.') ? namePart.split(/(?=\.[^.]+$)/) : [namePart, ''];
            newNamePath = `${pathParts.join('/')}/${baseName}_${count}${extension}`;
        }

        fetch(`${BASE_URL}filemanager/checkFileExists`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ path: newNamePath })
        })
        .then(response => response.json())
        .then(data => {
            if (data.exists) {
                checkAndRenameFile(oldPath, newPath, count + 1);
            } else {
                proceedWithRenaming(oldPath, newNamePath);
            }
        })
        .catch(error => {
            console.error('Error checking file existence:', error);
            alert('There was an error renaming the file. Please try again.');
        });
    }

    function proceedWithRenaming(oldPath, newPath) {
        fetch(`${BASE_URL}filemanager/renameFile`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ oldPath, newPath })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                listFiles(currentPath);
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error renaming file:', error);
            alert('There was an error renaming the file. Please try again.');
        });
    }
</script>

