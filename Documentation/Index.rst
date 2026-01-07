.. include:: Includes.rst.txt

.. _start:

==========================
Powermail Development Site
==========================

:Version:
   0.0.1

:Language:
    en

:Author:
    Marcus Schwemer

:Repository:
   https://github.com/in2code-de/powermail-site

:Community-Support:
   https://typo3.slack.com/archives/C06P2DQG2

:Rendered:
    |today|

----

This is the powermail development instance. This is here to make it easier to
contribute and test EXT:powermail and related extensions.

----

.. only:: html

    **On this page**

    :ref:`quickstart` | :ref:`features` | :ref:`credits` |

----

**Table of Contents:**

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Setup/Index
    Reference/Index

----

.. _quickstart:

Quickstart
==========

* Clone repository from above
* Run `ddev start`
* Run `ddev initialize`

At the end of the command, you will have a running TYPO3 instance with powermail
installed and the current development and testing setup.

.. _features:

Features
========

- a TYPO3 instance with EXT:powermail installed, based on EXT:bootstrap_package
- commands to install, enable and disable additional powermail related extensions
- TYPO3 documentation rendering with hot reloading for powermail-site
- commands to run static tests and code analyzers for powermail
- ddev host command to render docs for extensions manually (local composer binary needed)

TBD
---

- integrate unit tests
- integrate behaviour tests

.. _credits:

Credits
=======

Many thanks go to `DKD Internet GmbH`_ & `Raphael Kähm`_!

The development site is heavily inspired by the `development site for Apache Solr`_. Without this "template" the
powermail development site would not be there, where it is now! Thanks for sharing!

.. _development site for Apache Solr: https://github.com/TYPO3-Solr/solr-ddev-site
.. _DKD Internet GmbH: https://www.dkd.de/
.. _Raphael Kähm: https://github.com/dkd-kaehm

..  Meta Menu

..  toctree::
    :hidden:

    Sitemap
