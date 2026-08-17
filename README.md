# Custom Résumé written in php 

Now, why would any sane individual want to create a résumé by writing code?
Well, first of all, that's a very bold assumption but there are actually several
good reasons:

* To create a unique look and feel.
* A Website layout can adapt to different media formats so it can appear
  as one big column on a phone but when printed will fill the page out!
* Avoid online template services. I'm also just not a big fan of word
  processors.
* Easily generate many formats (PDF) without the risk of file corruption.
* Using CSS makes it easier to ensure styles are consistent.
* Show of some programming skills.

## How to build

If you are on windows you will need to either follow the instructions here:
<https://www.php.net/manual/en/install.windows.php>

Or use the WSL:
<https://learn.microsoft.com/en-us/windows/wsl/install>

On linux or mac install the PHP package and run the following command
to generate the html from the source files.

```php index.php > release/index.html```

This project is designed so that everything gets compressed into a single html
file for maximum portability.

To generate a PDF file open in your browser and press cntr+p to print then
select print to file.
