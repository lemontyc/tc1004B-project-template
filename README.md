# TCB1004B - Internet of Things - Final Project Template - Aug/Dic 2020

> Simple and easy to understand template for a website that receives and visualizes data.

This is a very simple template of a website capable of receiving data from ``GET`` requests, saving it into a database, and plotting said data. All database transactions are made in ``PHP``, visualizations are done in ``JavaScript`` and ``HTML``. 

## See it working
As of January 2021, this site was working. If it isn't open an issue or contact me. Most likely GearHost was updated or something.

**[See website deployed at GearHost](http://tc1004b.gearhostpreview.com/)**

## Features

* Receives data from ``GET`` requests.
* Database:
    * Saves data.
    * Reads all data.
* Visualization:
    * Gauge
    * 2D Plots

## Requirements
Nothing other than a free account at [GearHost](https://www.gearhost.com/), everything is self-contained.

## Running
1. Create a free website at ``GearHost`` with any name you like. While this is being created continue with nex step.
2. Create a free MySQL database with any available name you like.
3. Fork this repo to you GitHub account.
4. Modify the ``data/database.php`` file with your ``$dbname`` and ``$pssword``. 
5. Create a table named ``sensor`` with columns ``id``, ``sensor1value``, ``sensor2value`` and ``timestamp`` (this last one should be auto, meaning it should update when data is inserted).
6. Deploy the website in ``GearHost``. Point it to  this repo in your ``GitHub`` account. 


## Meta

* **Luis M.**           - [GitHub](https://github.com/lemontyc)


Distributed under the MIT License. See ``LICENSE`` for more information.

This project was developed for the **TC1004B** course at **ITESM Sonora**.

