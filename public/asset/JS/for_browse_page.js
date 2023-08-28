var announcementTable = document.getElementById("announcementTable");
var announcementRows = announcementTable.querySelectorAll(".announcement-row");
var buttons = document.querySelectorAll(".announcement-button");

//For page buttom
buttons.forEach(function(button) {
    button.addEventListener("click", function() {
        buttons.forEach(function(otherButton) {
            otherButton.classList.remove("selected");
        });

        button.classList.add("selected");
        var start = parseInt(button.getAttribute("data-start"));
        var end = parseInt(button.getAttribute("data-end"));
        showAnnouncements(start, end);
    });
});

function showAnnouncements(startIndex, endIndex) {
    announcementRows.forEach(function(row, index) {
        if (index >= startIndex && index < endIndex) {
            row.style.display = "table-row";
        } else {
            row.style.display = "none";
        }
    });
}

//當進入頁面時，自動點擊首個button，目的讓table只顯示7個公告
document.addEventListener("DOMContentLoaded", function() {
    var firstButton = document.querySelector(".announcement-button");
    firstButton.click();
});

//For them selector buttom
var selects = document.querySelectorAll(".menu-select")
//For page buttom
selects.forEach(function(select) {
    select.addEventListener("click", function() {
        select.classList.add("selected");
        var theme = select.getAttribute("theme")
        showAnnouncements2(theme);
    });
});

function showAnnouncements2(theme) {
    announcementRows.forEach(function(row) {
        var themeCell = row.querySelector(".theme-cell"); // 获取主题内容的单元格元素
        var rowTheme = themeCell.textContent.trim(); // 获取主题内容的文本并去除空格
        var real_theme = "[" + theme + "]";
        if (rowTheme === real_theme) {
            row.style.display = "table-row";
        } else {
            row.style.display = "none";
        }
    });
}