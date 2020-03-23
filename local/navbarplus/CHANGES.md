moodle-local_navbarplus
========================

Changes
-------

### Release v3.8-r1

* 2020-02-18 - Prepare compatibility for Moodle 3.8.

### Release v3.7-r2

* 2020-02-13 - Adapt the placement of the icons in the navbar due to Moodle core upstream changes in MDL-67577.
               PLEASE NOTE: From now on, local_navbarplus icons will be placed on the _right_ side of the Moodle
               core icons and not on the _left_ side anymore.
* 2019-06-26 - Removed the optional aspect from the behat tests scenarios.

### Release v3.7-r1

* 2019-06-19 - Added Behat tests.
* 2019-06-17 - Improved accessibility for the icons.
* 2019-06-17 - Prepare compatibility for Moodle 3.7.

### Release v3.6-r3

* 2019-06-19 - Fixed bug that added id attribute to all other items.

### Release v3.6-r2

* 2019-05-31 - Target link to FontAwesome icon list to FontAwesome 4.7.0 which is still used by Moodle core.

### Release v3.6-r1

* 2019-01-16 - Check compatibility for Moodle 3.6, no functionality change.

### Release v3.5-r2

* 2019-01-09 - Unified CSS classes: changed local_navbarplus_resetusertour to localnavbarplus-resetusertour.
* 2019-01-05 - Bugfix: Corrected check for the user tours setting.
* 2018-12-05 - Changed travis.yml due to upstream changes.

### Release v3.5-r1

* 2018-05-24 - Changed setting description and README due to changes in referred Bootstrap classes.
* 2018-05-24 - Changed CSS selectors due to changes in Boost. IMPORTANT: Theme clean is no longer supported!
* 2018-05-24 - Check compatibility for Moodle 3.5, no functionality change.

### Release v3.4-r3

* 2018-05-16 - Implement Privacy API.

### Release v3.4-r2

* 2018-03-05 - Fixed Bug for openinnewwindow feature.
* 2018-02-22 - Added further information to the README.md.

### Release v3.4-r1

* 2017-12-21- Check compatibility for Moodle 3.4, no functionality change.

### Release v3.3-r2

* 2017-12-15 - Improved HTML structure for the icons.
* 2017-12-05 - Added Workaround to travis.yml for fixing Behat tests with TravisCI.

### Release v3.3-r1

* 2017-11-23 - Removed support for Moodle pix icons.
* 2017-11-23 - Small fix to prevent icons with target blank from being shown when they do not match the language setting.
* 2017-11-23 - Check compatibility for Moodle 3.3, no functionality change.
* 2017-11-08 - Updated travis.yml to use newer node version for fixing TravisCI error.

### Release v3.2-r8

* 2017-10-05 - Fixed undefined property notice bug caused by the additional id parameter.

### Release v3.2-r7

* 2017-10-04 - Added possibility to add an individual element id.
* 2017-10-04 - Added possibility to add individual CSS classes.
* 2017-09-18 - Added a hint to the README.md how to individually set another icon for the reset user tour feature.

### Release v3.2-r6

* 2017-09-14 - Fix to prevent adding empty containers if elements shall not be displayed.

### Release v3.2-r5

* 2017-08-11 - Fixed string in lang package.

### Release v3.2-r4

* 2017-08-11 - Setting to place an icon in the navbar for users to restart user tours of the current page.

### Release v3.2-r3

* 2017-06-26 - Added possibility to add language support and new window attribute.
* 2017-06-17 - Add Travis CI support

### Release v3.2-r2

* 2017-06-02 - Make codechecker happy.

### Release v3.2-r1

* 2017-05-12 - Added support for Clean theme.
* 2017-05-10 - Initial version.
