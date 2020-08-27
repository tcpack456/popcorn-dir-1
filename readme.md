# popcorn-dir

## Introduction

Due to the ongoing and unpredictable nature of Covid-19, our Cub Scout pack is relying on online sales to meet our fundraising goal for the year and help keep Scouting affordable for all of the families in our pack.

I put this site together to help us organize our online sales and make it easier for our Scouts to share their links with friends and families.

You can see our live example here: http://hspack361.com/popcorn

## Prerequisites

This site is designed to be lightweight and portable. It uses Bootstrap 4.5 via CDN for the layout and design. It relies only on PHP for some basic file processing. 

Anyone with some basic web programming skills should be able to modify this to fit their needs without a ton of work. I don't have much free time for tech support, but I'll answer questions when I can.

## How to Use These Files

You should be able to download these files to your web server, update the text files in `./data`, and have a working solution. Anything more complicated may require updates to `index.php` and `random.php`.

## File Descriptions

* `./index.php` - This is the main page. It'll read the data files in `./data` and generate the listing automatically. The button on this page simply links to `random.php`. The progress meter data is loaded from `update.txt`.

* `./random.php` - This will read all of the data files in `./data`, generate a random URL from all of the available URLs, and redirect the user to the randomly selected URL.

* `./data/*.txt` - These files are simple comma-separated lists of names and Trails End referral codes. You can get a master list of these codes from your unit fundraising coordinator. If you add, remove, or rename any files in this directory, be sure to edit `index.php` and `random.php` to reference the new files.

* `./img/*.{jpg|png}` - These are used in `index.php` for visual interest. You can replace these files and update the `<img>` tags in `index.php` or you can simply remove the `<img>` tags altogether.

* `./update.html` - This file is used to update the data file for the progress meter on `index.php`.

* `./update.php` - This file handles the form submission from `update.html` and writes the values to `update.txt`. Note that there is a basic password requirement here. You can set your own password or use the default password, `INSERT-PASSWORD-HERE`. This is also where you set your total sales goal and your sales deadline. The values for "last updated" and "percent sold" will be calculated on the server.

* `./updated.txt` - This is the data file that is loaded into `index.php` to setup the progress meter.

## Contributing

If you find a bug or have an idea for improving this simple project, please feel free to fork the project and send a pull request.

## Licensing

![CreativeCommons BY-NC-SA 4.0](https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png)

This work is licensed under a [Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License](https://creativecommons.org/licenses/by-nc-sa/4.0/).

If you want to show your thanks, you can [buy some popcorn](https://www.trails-end.com/store/scout/78F7Y6N2)! ;)
