# Custom Résumé written in php 

Now, why would any sane individual want to create a résumé by writing code?
Well, first of all, that's a very bold assumption but there are actually several
good reasons:

* To create a unique look and feel.
* A Website layout can adapt to different media formats so it can appear
  more optimally on a phone screen, a desktop and a printed sheet of paper.
* It avoids online template services. I'm also just not a big fan of word
  processors.
* Easily generate many formats (like PDF) without the risk of file corruption.
* Using CSS makes it easier to ensure styles are consistent.
* Show off some programming skills.

## How to view and download

Follow the link to see in your browser.
<https://htmlpreview.github.io/?https://github.com/justjosh443/resume/blob/main/release/resume.html>

Or click below to download the PDF version.
<https://github.com/justjosh443/resume/tree/main/release/resume.pdf>

## How to build

If you are on windows you will need to either follow the instructions here:
<https://www.php.net/manual/en/install.windows.php>

Or use the WSL:
<https://learn.microsoft.com/en-us/windows/wsl/install>

On Linux or Mac install the PHP package and run the following command
to generate the html from the source files.

```php index.php > release/resume.html```

This project is designed so that everything gets compressed into a single html
file for maximum portability.

To generate a PDF file open in your browser and press cntr+p to print then
select print to file.
