<?PHP // $Id: grades.php,v 1.111.2.68 2009/10/27 11:26:52 nicolasconnault Exp $
      // grades.php - created with Moodle 1.7 beta + (2006101003)


$string['activities'] = 'Activities';
$string['addcategory'] = 'Add category';
$string['addcategoryerror'] = 'Could not add category.';
$string['addexceptionerror'] = 'Error occurred while adding exception for userid:gradeitem';
$string['addfeedback'] = 'Add feedback';
$string['addgradeletter'] = 'Add a grade letter';
$string['addidnumbers'] = 'Add id numbers';
$string['additem'] = 'Add grade item';
$string['addoutcomeitem'] = 'Add outcome item';
$string['addoutcome'] = 'Add an outcome';
$string['addscale'] = 'Add a scale';
$string['aggregateextracreditmean'] = 'Mean of grades (with extra credits)';
$string['aggregatemean'] = 'Mean of grades';
$string['aggregatemedian'] = 'Median of grades';
$string['aggregatemin'] = 'Lowest grade';
$string['aggregatemax'] = 'Highest grade';
$string['aggregatemode'] = 'Mode of grades';
$string['aggregateonlygraded'] = 'Aggregate only non-empty grades';
$string['aggregateonlygradedhelp'] = 'Nonexistent grades are either treated as minimal grades or not included in aggregation.';
$string['aggregateoutcomes'] = 'Include outcomes in aggregation';
$string['aggregateoutcomeshelp'] = 'Including outcomes in aggregation may not lead to the desired overall grade, so you have the option to include or leave them out.';
$string['aggregatesubcats'] = 'Aggregate including subcategories';
$string['aggregatesubcatshelp'] = 'The aggregation is usually done only with immediate children, it is also possible to aggregate grades in all subcategories excluding other aggregated grades.';
$string['aggregatesum'] = 'Sum of grades';
$string['aggregatesonly'] = 'Aggregates only';
$string['aggregateweightedmean'] = 'Weighted mean of grades';
$string['aggregateweightedmean2'] = 'Simple weighted mean of grades';
$string['aggregation'] = 'Aggregation';
$string['aggregationcoef'] = 'Aggregation coefficient';
$string['aggregationcoefextra'] = 'Extra credit';
$string['aggregationcoefextrahelp'] = 'Extra credit for this grade item during aggregation.';
$string['aggregationcoefextrasum'] = 'Extra credit';
$string['aggregationcoefextrasumhelp'] = 'Extra credit for this grade item during aggregation.';
$string['aggregationcoefweight'] = 'Item weight';
$string['aggregationcoefweighthelp'] = 'Weight applied to all grades in this grade item during aggregation with other grade items.';
$string['aggregationhelp'] = 'Strategy used to aggregate grades across all students in a course.';
$string['aggregationposition'] = 'Aggregation position';
$string['aggregationsvisible'] = 'Available aggregation types';
$string['aggregationsvisiblehelp'] = 'Select all aggregation types that should be available. Hold down the Ctrl key to select multiple items.';
$string['aggregationview'] = 'Aggregation view';
$string['allgrades'] = 'All grades by category';
$string['allstudents'] = 'All students';
$string['allusers'] = 'All users';
$string['autosort'] = 'Auto-sort';
$string['availableidnumbers'] = 'Available id numbers';
$string['average'] = 'Average';
$string['averagesdecimalpoints'] = 'Decimals in column averages';
$string['averagesdisplaytype'] = 'Column averages display type';
$string['backupwithoutgradebook'] = 'Backup does not contain Gradebook configuration';
$string['badgrade'] = 'Supplied grade is invalid';
$string['badlyformattedscale'] = 'Please enter a comma-separated list of values (at least two values required).';
$string['baduser'] = 'Supplied user is invalid';
$string['bonuspoints'] = 'Bonus points';
$string['combo'] = 'Tabs and Dropdown menu';
$string['bulkcheckboxes'] = 'Bulk checkboxes';
$string['calculatedgrade'] = 'Calculated grade';
$string['calculation'] = 'Calculation';
$string['calculationadd'] = 'Add calculation';
$string['calculationedit'] = 'Edit calculation';
$string['calculationview'] = 'View calculation';
$string['calculationsaved'] = 'Calculation saved';
$string['cannotaccessgroup'] = 'Can not access grades of selected group, sorry.';
$string['categories'] = 'Categories';
$string['categoriesanditems'] = 'Categories and items';
$string['categoriesedit'] = 'Edit categories and items';
$string['category'] = 'Category';
$string['categoryedit'] = 'Edit category';
$string['categoryname'] = 'Category name';
$string['categorytotal'] = 'Category total';
$string['categorytotalfull'] = '$a->category total';
$string['changereportdefaults'] = 'Change report defaults';
$string['changedefaults'] = 'Change defaults';
$string['choosecategory'] = 'Select category';
$string['chooseaction'] = 'Choose an action ...';
$string['compact'] = 'Compact';
$string['configdisablegradehistory'] = 'Disable history tracking of changes in grades related tables. This may speed up the server a little and conserve space in database.';
$string['configaggregationposition'] = 'Defines the position of the aggregation total column in the report related to the grades being aggregated.';
$string['configaggregationview'] = 'Each category can be displayed in three ways: Full mode (aggregated column and grade item columns), the aggregated column only, or the grade items alone.';
$string['configaveragesdecimalpoints'] = 'Specifies the number of decimal points to display for each column mean. If Inherit is selected, the display type for each column is used.';
$string['configaveragesdisplaytype'] = 'Specifies how to display the mean for each column. If Inherit is selected, the display type for each column is used.';
$string['configcoursegradedisplaytype'] = 'Select the default display type of grades for this course. You can also select the site default value. Grades can be shown as real grades, as percentages (in reference to the minimum and maximum grades) or as letters (A, B, C etc..). Selecting Letters will allow you to define your own grade letters and boundaries.';
$string['configdecimalpoints'] = 'Specifies the number of decimal points to display for each grade. This setting may be overridden per grading item.';
$string['configenableajax'] = 'Adds a layer of AJAX functionality to the grader report, simplifying and speeding up common operations. Depends on Javascript being switched on at the user\'s browser level.';
$string['configenableoutcomes'] = 'Support for Outcomes (also known as Competencies, Goals, Standards or Criteria) means that we can grade things using one or more scales that are tied to outcome statements. Enabling outcomes makes such special grading possible throughout the site.';
$string['configfixedstudents'] = 'Allows grades to scroll horizontally without losing sight of the students column, by making it static.';
$string['configgradeboundary'] = 'A percentage boundary over which grades will be assigned a grade letter (if the Letter grade display type is used). ';
$string['configgradedisplaytype'] = 'Specifies how to display grades in the grader and user reports. Grades may be shown as actual grades, as percentages (in reference to the minimum and maximum grades) or as letters.';
$string['configgradeexportdisplaytype'] = 'Grades can be shown as real grades, as percentages (in reference to the minimum and maximum grades) or as letters (A, B, C etc..) during export. This can be overridden during export.';
$string['configexportdecimalpoints'] = 'The number of decimal points to display for export. This can be overridden during export.';
$string['configgradehistorylifetime'] = 'This specifies the length of time you want to keep history of changes in grade related tables. It is recommended to keep it as long as possible. If you experience performance problems or have limited database space, try to set lower value.';
$string['configgradeitemadvanced'] = 'Select all elements that should be displayed as advanced when editing grade items.';
$string['configgradeletter'] = 'A letter or other symbol used to represent a range of grades.';
$string['configgradeletterdefault'] = 'A letter or other symbol used to represent a range of grades. Leave this field empty to use the site default (currently $a).';
$string['configgradepublishing'] = 'Enable publishing in exports and imports: Exported grades can be accessed by accessing a URL, without having to log on to a Moodle site. Grades can be imported by accessing such a URL (which means that a Moodle site can import grades published by another site). By default only administrators may use this feature, please educate users before adding required capabilities to other roles (dangers of bookmark sharing and download accelerators, IP restrictions, etc.).';
$string['confighiddenasdate'] = 'If user can not see hidden grades show date of submission instead of \'-\'.';
$string['configincludescalesinaggregation'] = 'You can change whether scales are to be included as numbers in all aggregated grades across all gradebooks in all courses. CAUTION: changing this setting will force all aggregated grades to be recalculated.';
$string['configmeanselection'] = 'Whether cells with no grade should be included when calculating the mean for each column.';
$string['configprofilereport'] = 'Grade report used on user profile page.';
$string['configshowquickfeedback'] = 'Quick Feedback adds a text input element in each grade cell on the grader report, allowing you to edit the feedback for many grades at once. You can then click the Update button to perform all these changes at once, instead of one at a time.';
$string['configquickgrading'] = 'Quick Grading adds a text input element in each grade cell on the grader report, allowing you to edit many grades at once. You can then click the Update button to perform all these changes at once, instead of one at a time.';
$string['configrangesdecimalpoints'] = 'Specifies the number of decimal points to display for each range. This setting may be overridden per grading item.';
$string['configrangesdisplaytype'] = 'Specifies how to display ranges. If Inherit is selected, the display type for each column is used.';
$string['confighideforcedsettings'] = 'Do not show forced settings in grading UI.';
$string['configshowcalculations'] = 'Whether to show calculator icons near each grade item and category, tooltips over calculated items and a visual indicator that a column is calculated.';
$string['configshoweyecons'] = 'Whether to show a show/hide icon near each grade (controlling its visibility to the user).';
$string['configshowactivityicons'] = 'Whether to show activity icons next to activity names.';
$string['configshowaverages'] = 'Whether to show the mean for each column.';
$string['configshowgroups'] = 'Whether to show the mean for each group.';
$string['configshowhiddenitems'] = 'Specifies how hidden grade items are shown. If Hide is selected, they are hidden completely. If Show is selected, the hidden grade item row is shown in grey with the grade hidden completely. If \"Only hidden until\" is selected, grade items with a \"hide until\" date set are shown in grey with the grades hidden completely until the set date, after which the whole item is shown.';
$string['configshowlocks'] = 'Whether to show a lock/unlock icon near each grade.';
$string['configshowfeedback'] = 'Whether to show a feedback icon (for adding/editing) near each grade.';
$string['configshownumberofgrades'] = 'Whether to show the number of grades used when calculating the mean in brackets after each average, for example 45 (34).';
$string['configshowranges'] = 'Whether to show the range of grades for each column in an additional row.';
$string['configshowpercentage'] = 'Whether to show the percentage value of each grade item.';
$string['configshowrank'] = 'Whether to show the position of the user in relation to the rest of the class, for each grade item.';
$string['configshowuseridnumber'] = 'Whether to show user id numbers in an additional column.';
$string['configshowuserimage'] = 'Whether to show the user\'s profile image next to the name in the grader report.';
$string['configstudentsperpage'] = 'The number of students to display per page in the grader report.';
$string['configstudentsperpagedefault'] = 'The number of students to display per page in the grader report. Leave this field empty to use the site default (currently $a).';
$string['configunlimitedgrades'] = 'By default grades are limited by the maximum and minimum values of the grade item. Enabling this setting removes this limit, and allows grades of over 100%% to be entered directly in the gradebook. It is recommended that this setting is enabled at an off-peak time, as all grades will be recalculated, which may result in a high server load.';
$string['contract'] = 'Contract Category';
$string['controls'] = 'Controls';
$string['coursegradecategory'] = 'Course grade category';
$string['coursegradedisplaytype'] = 'Course grade display type';
$string['coursegradedisplayupdated'] = 'The course grade display type has been updated.';
$string['coursename'] = 'Course name';
$string['coursescales'] = 'Course scales';
$string['coursesettings'] = 'Course settings';
$string['coursesettingsexplanation'] = 'Course settings determine how the gradebook appears for all participants in the course.';
$string['coursetotal'] = 'Course total';
$string['createcategory'] = 'Create category';
$string['createcategoryerror'] = 'Could not create a new category';
$string['creatinggradebooksettings'] = 'Creating gradebook settings';
$string['currentparentaggregation'] = 'Current parent aggregation';
$string['csv'] = 'CSV';
$string['curveto'] = 'Curve to';
$string['decimalpoints'] = 'Overall decimal points';
$string['default'] = 'Default';
$string['defaultprev'] = 'Default ($a)';
$string['deletecategory'] = 'Delete category';
$string['disablegradehistory'] = 'Disable grade history';
$string['displaylettergrade'] = 'Display letter grades';
$string['displaypercent'] = 'Display percents';
$string['displaypoints'] = 'Display points';
$string['displayweighted'] = 'Display weighted grades';
$string['dropdown'] = 'Dropdown menu';
$string['droplow'] = 'Drop the lowest';
$string['droplowhelp'] = 'If set, this option will drop the X lowest grades, X being the selected value for this option.';
$string['dropped'] = 'Dropped';
$string['dropxlowest'] = 'Drop X lowest';
$string['dropxlowestwarning'] = 'Note: If you use drop x lowest the grading assumes that all items in the category have the same point value. If point values differ results will be unpredictable';
$string['duplicatescale'] = 'Duplicate scale';
$string['edit'] = 'Edit';
$string['editcalculation'] = 'Edit calculation';
$string['editcalculationverbose'] = 'Edit calculation for $a->category$a->itemmodule $a->itemname';
$string['editfeedback'] = 'Edit feedback';
$string['editgrade'] = 'Edit grade';
$string['editgradeletters'] = 'Edit grade letters';
$string['editoutcome'] = 'Edit outcome';
$string['editoutcomes'] = 'Edit outcomes';
$string['editscale'] = 'Edit scale';
$string['edittree'] = 'Categories and items';
$string['editverbose'] = 'Edit $a->category$a->itemmodule $a->itemname';
$string['enableajax'] = 'Enable AJAX';
$string['enableoutcomes'] = 'Enable outcomes';
$string['encoding'] = 'Encoding';
$string['errorgradevaluenonnumeric'] = 'Received non-numeric for low or high grade for';
$string['errorcalculationnoequal'] = 'Formula must start with equal sign (=1+2)';
$string['errorcalculationunknown'] = 'Invalid formula';
$string['errornocalculationallowed'] = 'Calculations are not allowed for this item';
$string['errornocategorisedid'] = 'Could not get an uncategorised id!';
$string['errornocourse'] = 'Could not get course information';
$string['errorreprintheadersnonnumeric'] = 'Received non-numeric value for reprint-headers';
$string['errorsavegrade'] = 'Could not save grade, sorry.';
$string['exceptions'] = 'Exceptions';
$string['excluded'] = 'Excluded';
$string['excludedhelp'] = 'If -excluded- is switched on, this grade will be excluded from any aggregation performed by any parent grade item or category.';
$string['expand'] = 'Expand Category';
$string['export'] = 'Export';
$string['exportfeedback'] = 'Include feedback in export';
$string['exportplugins'] = 'Export plugins';
$string['exportalloutcomes'] = 'Export all outcomes';
$string['exportsettings'] = 'Export settings';
$string['exportto'] = 'Export to';
$string['extracredit'] = 'Extra Credit';
$string['extracreditwarning'] = 'Note: Setting all items for a category to extra credit will effectively remove them from the grade calculation. Since there will be no point total';
$string['feedback'] = 'Feedback';
$string['feedbackhelp'] = 'Notes added to the grade by the teacher. They can be extensive, personalised feedback or a simple code that refers to an internal system of feedback.';
$string['feedbackadd'] = 'Add feedback';
$string['feedbackedit'] = 'Edit feedback';
$string['feedbackview'] = 'View feedback';
$string['feedbacksaved'] = 'Feedback saved';
$string['finalgrade'] = 'Final grade';
$string['finalgradehelp'] = 'The final grade (cached) after all calculations are performed.';
$string['fixedstudents'] = 'Static students column';
$string['forceoff'] = 'Force: Off';
$string['forceon'] = 'Force: On';
$string['forelementtypes'] = ' for the selected $a';
$string['forstudents'] = 'For students';
$string['full'] = 'Full';
$string['fullmode'] = 'Full view';
$string['fullview'] = 'Full view';
$string['generalsettings'] = 'General settings';
$string['grade'] = 'Grade';
$string['gradebook'] = 'Gradebook';
$string['gradebookhiddenerror'] = 'The gradebook is currently set to hide everything from students.';
$string['gradebookhistories'] = 'Grade histories';
$string['gradeboundary'] = 'Letter grade boundary';
$string['gradecategories'] = 'Grade categories';
$string['gradecategory'] = 'Grade category';
$string['gradecategoryhelp'] = 'Grade category help';
$string['gradecategorysettings'] = 'Grade category settings';
$string['gradedon'] = 'Graded: $a';
$string['gradedisplay'] = 'Grade display';
$string['gradedisplaytype'] = 'Grade display type';
$string['gradeexceptions'] = 'Grade exceptions';
$string['gradeexceptionshelp'] = 'Grade exceptions Help';
$string['gradeexportdisplaytype'] = 'Grade export display type';
$string['gradeexportdecimalpoints'] = 'Grade export decimal points';
$string['gradeforstudent'] = '$a->student<br />$a->item$a->feedback';
$string['gradehelp'] = 'Grade Help';
$string['gradehistorylifetime'] = 'Grade history lifetime';
$string['gradeitem'] = 'Grade item';
$string['gradeitemadvanced'] = 'Advanced grade item options';
$string['gradeitemislocked'] = 'This activity is locked in the gradebook. Changes that are made to grades in this activity will not be copied to the gradebook until it is unlocked.';
$string['gradeitemlocked'] = 'Grading locked';
$string['gradeitemsinc'] = 'Grade items to be included';
$string['gradeitemaddusers'] = 'Exclude from grading';
$string['gradeitemmembersselected'] = 'Excluded from grading';
$string['gradeitemnonmembers'] = 'Included in grading';
$string['gradeitemremovemembers'] = 'Include in grading';
$string['gradeitems'] = 'Grade items';
$string['gradeitemsettings'] = 'Grade item settings';
$string['gradeletter'] = 'Grade letter';
$string['gradeletters'] = 'Grade letters';
$string['gradeletterhelp'] = 'Grade letter Help';
$string['gradeletternote'] = 'To delete a grade letter just empty any of the<br /> three text areas for that letter and click submit.';
$string['gradelocked'] = 'Grade is locked';
$string['gradelong'] = '$a->grade / $a->max';
$string['grademax'] = 'Maximum grade';
$string['grademaxhelp'] = 'When using the value grade type, a maximum grade can be set. The maximum grade for an activity-based grade item is set on the update activity page.';
$string['grademin'] = 'Minimum grade';
$string['grademinhelp'] = 'When using the value grade type, a minimum grade can be set.';
$string['gradeoutcomeitem'] = 'Grade outcome item';
$string['gradeoutcomes'] = 'Outcomes';
$string['gradeoutcomescourses'] = 'Course outcomes';
$string['gradepass'] = 'Grade to pass';
$string['gradepasshelp'] = 'If an item has a grade that users must equal or exceed to pass that item, you can set that here.';
$string['gradepublishing'] = 'Enable publishing';
$string['graderreport'] = 'Grader report';
$string['gradessettings'] = 'Grade settings';
$string['gradepreferences'] = 'Grade preferences';
$string['gradepreferenceshelp'] = 'Grade preferences Help';
$string['grades'] = 'Grades';
$string['gradesforuser'] = 'Grades for $a->user';
$string['gradesonly'] = 'Grades only';
$string['gradetype'] = 'Grade type';
$string['gradetypehelp'] = 'Specifies the type of grade used: none (no grading possible), value (enables the maximum and minimum grade settings), scale (enables the scale setting) or text (feedback only). Only value and scale grade types may be aggregated. The grade type for an activity-based grade item is set on the update activity page.';
$string['gradeview'] = 'View Grade';
$string['gradeweighthelp'] = 'Grade weight Help';
$string['groupavg'] = 'Group average';
$string['hidden'] = 'Hidden';
$string['hiddenasdate'] = 'Show submitted date for hidden grades';
$string['hiddenuntil'] = 'Hidden until';
$string['hiddenuntildate'] = 'Hidden until: $a';
$string['hideadvanced'] = 'Hide advanced features';
$string['hidecalculations'] = 'Hide calculations';
$string['hidecategory'] = 'Hidden';
$string['hideeyecons'] = 'Hide show/hide icons';
$string['hideaverages'] = 'Hide averages';
$string['hidegroups'] = 'Hide groups';
$string['hidelocks'] = 'Hide locks';
$string['hidenooutcomes'] = 'Show outcomes';
$string['hidefeedback'] = 'Hide feedback';
$string['hideranges'] = 'Hide ranges';
$string['hideverbose'] = 'Hide $a->category$a->itemmodule $a->itemname';
$string['highgradeascending'] = 'Sort by high grade ascending';
$string['highgradedescending'] = 'Sort by high grade descending';
$string['highgradeletter'] = 'High';
$string['hidequickfeedback'] = 'Hide Quick Feedback';
$string['idnumberhelp'] = 'Setting an ID number provides a way of identifying the activity for grade calculation purposes. If the activity is not included in any grade calculation then the ID number field can be left blank. The ID number for an activity-based grade item may be set on the update activity page.';
$string['idnumbers'] = 'Id numbers';
$string['identifier'] = 'Identify user by';
$string['import'] = 'Import';
$string['importcsv'] = 'Import CSV';
$string['importcustom'] = 'Import as custom outcomes (only this course)';
$string['importerror'] = 'An error occurred, this script wasn\'t called with the right parameters.';
$string['importfrom'] = 'Import from';
$string['importfailed'] = 'Import failed';
$string['importfeedback'] = 'Import feedback';
$string['importfile'] = 'Import file';
$string['importfilemissing'] = 'No file was received, go back to the form and make sure to upload a valid file.';
$string['importoutcomenofile'] = 'The uploaded file is empty or corrupted.  Please verify this is a valid file. The problem was detected at line $a; this is triggered by the data lines not having as many columns as the first line (the header line) or if the imported file is missing expected headers.  Look at the exported file for an example of a file with valid header.';
$string['importoutcomes'] = 'Import outcomes';
$string['importoutcomesuccess'] = 'Imported outcome \"$a->name\" with ID #$a->id';
$string['importplugins'] = 'Import plugins';
$string['importpreview'] = 'Import preview';
$string['importsettings'] = 'Import settings';
$string['importstandard'] = 'Import as standard outcomes';
$string['importskippednomanagescale'] = 'You don\'t have permission to add a new scale, so outcome "$a" was skipped as it required creating a new scale';
$string['importskippedoutcome'] = 'An outcome with shortname \"$a\" already exists in this context, the one in the imported file was skipped.';
$string['importsuccess'] = 'Grade import success';
$string['importxml'] = 'Import XML';
$string['includescalesinaggregation'] = 'Include scales in aggregation';
$string['incorrectcourseid'] = 'Course ID was incorrect';
$string['incorrectcustomscale'] = '(Incorrect custom scale, please change.)';
$string['incorrectminmax'] = 'The minimum must be lower than the maximum';
$string['inherit'] = 'Inherit';
$string['intersectioninfo'] = 'Student/Grade info';
$string['item'] = 'Item';
$string['iteminfo'] = 'Item info';
$string['iteminfohelp'] = 'A space for entering information about the item. Text entered does not appear anywhere else.';
$string['itemname'] = 'Item name';
$string['itemnamehelp'] = 'The name of this item, pushed in by the module.';
$string['items'] = 'Items';
$string['itemsedit'] = 'Edit grade item';
$string['keephigh'] = 'Keep the highest';
$string['keephighhelp'] = 'If set, this option will only keep the X highest grades, X being the selected value for this option.';
$string['keymanager'] = 'Key manager';
$string['lessthanmin'] = 'The grade entered for $a->itemname for $a->username is less than the minimum allowed';
$string['lettergrade'] = 'Letter grade';
$string['lettergradenonnumber'] = 'Low and/or High grade were non-numeric for';
$string['letter'] = 'Letter';
$string['letterpercentage'] = 'Letter (percentage)';
$string['letterreal'] = 'Letter (real)';
$string['letters'] = 'Letters';
$string['linkedactivity'] = 'Linked activity';
$string['linkedactivityhelp'] = 'Specifies an optional activity to which this outcome item is linked. This is used to measure student performance on criteria not assessed by the activity grade.';
$string['linktoactivity'] = 'Link to $a->name activity';
$string['lock'] = 'Lock';
$string['locked'] = 'Locked';
$string['locktime'] = 'Lock after';
$string['locktimedate'] = 'Locked after: $a';
$string['lockverbose'] = 'Lock $a->category$a->itemmodule $a->itemname';
$string['lowest'] = 'Lowest';
$string['lowgradeletter'] = 'Low';
$string['manualitem'] = 'Manual item';
$string['mapfrom'] = 'Map from';
$string['mapto'] = 'Map to';
$string['max'] = 'Highest';
$string['maxgrade'] = 'Max grade';
$string['mappings'] = 'Grade item mappings';
$string['meanall'] = 'All grades';
$string['meangraded'] = 'Non-empty grades';
$string['meanselection'] = 'Grades selected for column averages';
$string['median'] = 'Median';
$string['min'] = 'Lowest';
$string['missingscale'] = 'Scale must be selected';
$string['mode'] = 'Mode';
$string['morethanmax'] = 'The grade entered for $a->itemname for $a->username is more than the maximum allowed';
$string['moveselectedto'] = 'Move selected items to';
$string['movingelement'] = 'Moving $a';
$string['multfactor'] = 'Multiplicator';
$string['multfactorhelp'] = 'Factor by which all grades for this grade item will be multiplied.';
$string['mypreferences'] = 'My preferences';
$string['myreportpreferences'] = 'My report preferences';
$string['navmethod'] = 'Navigation method';
$string['neverdeletehistory'] = 'Never delete history';
$string['newcategory'] = 'New category';
$string['newitem'] = 'New grade item';
$string['newoutcomeitem'] = 'New outcome item';
$string['newuserkey'] = 'New user key';
$string['no'] = 'No';
$string['nocategories'] = 'Grade categories could not be added or found for this course';
$string['nocategoryname'] = 'No category name was given.';
$string['nocategoryview'] = 'No category to view by';
$string['nocourses'] = 'There are no courses yet';
$string['noforce'] = 'Do not force';
$string['nogradeletters'] = 'No grade letters set';
$string['nogradesreturned'] = 'No grades returned';
$string['noidnumber'] = 'No id number';
$string['nolettergrade'] = 'No letter grade for';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Received non-numeric value for';
$string['nonunlockableverbose'] = 'This grade cannot be unlocked until $a->itemname is unlocked.';
$string['nonweightedpct'] = 'non-weighted %%';
$string['nooutcome'] = 'No outcome';
$string['nooutcomes'] = 'Outcome items must be linked to a course outcome, but there are no outcomes for this course. Would you like to add one?';
$string['nopublish'] = 'Do not publish';
$string['noscales'] = 'Outcomes must be linked to a course scale or global scale, but there are none. Would you like to add one?';
$string['noselectedcategories'] = 'no categories were selected.';
$string['noselecteditems'] = 'no items were selected.';
$string['notteachererror'] = 'You must be a teacher to use this feature.';
$string['numberofgrades'] = 'Number of grades';
$string['onascaleof'] = ' on a scale of $a->grademin to $a->grademax';
$string['operations'] = 'Operations';
$string['options'] = 'Options';
$string['outcome'] = 'Outcome';
$string['outcomeassigntocourse'] = 'Assign another outcome to this course';
$string['outcomecategory'] = 'Create outcomes in category';
$string['outcomecategorynew'] = 'New category';
$string['outcomeconfirmdelete'] = 'Are you sure you wish to delete the outcome \"$a\"?';
$string['outcomecreate'] = 'Add a new outcome';
$string['outcomedelete'] = 'Delete Outcome';
$string['outcomeidhelp'] = 'Specifies the Outcome which this grade item will represent in the gradebook. Only outcomes associated with this course and site-wide outcomes are available';
$string['outcomeitem'] = 'Outcome item';
$string['outcomeitemsedit'] = 'Edit outcome item';
$string['outcomes'] = 'Outcomes';
$string['outcomescustom'] = 'Custom outcomes';
$string['outcomescourse'] = 'Outcomes used in course';
$string['outcomescoursecustom'] = 'Custom used (no remove)';
$string['outcomescoursenotused'] = 'Standard not used';
$string['outcomescourseused'] = 'Standard used (no remove)';
$string['outcomescourse'] = 'Outcomes used in course';
$string['outcomename'] = 'Outcome name';
$string['outcomereport'] = 'Outcome report';
$string['outcomesstandard'] = 'Standard outcomes';
$string['outcomesstandardavailable'] = 'Available standard outcomes';
$string['outcomestandard'] = 'Standard outcome';
$string['outcomestandardhelp'] = 'A Standard outcome is available site-wide, for all courses.';
$string['outcomes'] = 'Outcomes';
$string['overallaverage'] = 'Overall average';
$string['overridesitedefaultgradedisplaytype'] = 'Override site defaults';
$string['overridesitedefaultgradedisplaytypehelp'] = 'Tick this checkbox to enable the overriding of the site defaults for the display of grades in the gradebook. This activates form elements allowing you to define the grade letters and boundaries of your choice.';
$string['overridden'] = 'Overridden';
$string['overriddenhelp'] = 'When on, the overridden flag prevents any future attempts to automatically adjust the value of the grade. This flag is often set internally by the gradebook, but can be switched on and off manually using this form element.';
$string['overriddennotice'] = 'Your final grade from this activity was manually adjusted.';
$string['courseavg'] = 'Course average';
$string['parentcategory'] = 'Parent category';
$string['pctoftotalgrade'] = '%% of total grade';
$string['percent'] = 'Percent';
$string['percentage'] = 'Percentage';
$string['percentageletter'] = 'Percentage (letter)';
$string['percentagereal'] = 'Percentage (real)';
$string['percentascending'] = 'Sort by percent ascending';
$string['percentdescending'] = 'Sort by percent descending';
$string['percentshort'] = '%%';
$string['plusfactor'] = 'Offset';
$string['plusfactorhelp'] = 'Number that will be added to every grade for this grade item, after the Multiplicator is applied.';
$string['points'] = 'points';
$string['pointsascending'] = 'Sort by points ascending';
$string['pointsdescending'] = 'Sort by points descending';
$string['positionfirst'] = 'First';
$string['positionlast'] = 'Last';
$string['preferences'] = 'Preferences';
$string['prefgeneral'] = 'General';
$string['prefletters'] = 'Grade letters and boundaries';
$string['prefrows'] = 'Special rows';
$string['prefshow'] = 'Show/hide toggles';
$string['previewrows'] = 'Preview rows';
$string['profilereport'] = 'User profile report';
$string['publishing'] = 'Publishing';
$string['quickfeedback'] = 'Quick Feedback';
$string['quickgrading'] = 'Quick Grading';
$string['range'] = 'Range';
$string['rangesdecimalpoints'] = 'Decimals shown in ranges';
$string['rangesdisplaytype'] = 'Range display type';
$string['rank'] = 'Rank';
$string['rawpct'] = 'Raw %%';
$string['real'] = 'Real';
$string['realletter'] = 'Real (letter)';
$string['realpercentage'] = 'Real (percentage)';
$string['regradeanyway'] = 'Regrade anyway';
$string['removeallcoursegrades'] = 'Delete all grades';
$string['removeallcourseitems'] = 'Delete all items and categories';
$string['hideforcedsettings'] = 'Hide forced settings';
$string['report'] = 'Report';
$string['reportdefault'] = 'Report default ($a)';
$string['reportplugins'] = 'Report plugins';
$string['reportsettings'] = 'Report settings';
$string['reprintheaders'] = 'Reprint Headers';
$string['respectingcurrentdata'] = 'leaving current configuration unmodified';
$string['rowpreviewnum'] = 'Preview rows';
$string['savechanges'] = 'Save changes';
$string['savepreferences'] = 'Save preferences';
$string['scaledpct'] = 'Scaled %%';
$string['scaleidhelp'] = 'When using the scale grade type, a scale can be selected. The scale for an activity-based grade item is selected on the update activity page.';
$string['scalestandardhelp'] = 'A standard scale is one that is available site-wide, for all courses.';
$string['seeallcoursegrades'] = 'See all course grades';
$string['selectdestination'] = 'Select destination of $a';
$string['selectalloroneuser'] = 'Select all or one user';
$string['selectauser'] = 'Select a user';
$string['septab'] = 'Tab';
$string['sepcomma'] = 'Comma';
$string['separator'] = 'Separator';
$string['setcategories'] = 'Set categories';
$string['setcategorieserror'] = 'You must first set the categories for your course before you can give weights to them.';
$string['setgradeletters'] = 'Set grade letters';
$string['setpreferences'] = 'Set preferences';
$string['setting'] = 'Setting';
$string['settings'] = 'Settings';
$string['setweights'] = 'Set weights';
$string['showallhidden'] = 'All hidden';
$string['showallstudents'] = 'Show all Students';
$string['showactivityicons'] = 'Show activity icons';
$string['showaverages'] = 'Show column averages';
$string['showcalculations'] = 'Show calculations';
$string['showeyecons'] = 'Show show/hide icons';
$string['showfeedback'] = 'Show feedback';
$string['showgroups'] = 'Show groups';
$string['showhiddenitems'] = 'Show hidden items';
$string['showhiddenuntilonly'] = 'Only hidden until';
$string['showlocks'] = 'Show locks';
$string['shownohidden'] = 'No hidden';
$string['shownooutcomes'] = 'Hide outcomes';
$string['shownumberofgrades'] = 'Show number of grades in averages';
$string['showpercentage'] = 'Show percentage';
$string['showquickfeedback'] = 'Show Quick Feedback';
$string['showranges'] = 'Show ranges';
$string['showrank'] = 'Show rank';
$string['showuseridnumber'] = 'Show user idnumber';
$string['showuserimage'] = 'Show user profile images';
$string['showverbose'] = 'Show $a->category$a->itemmodule $a->itemname';
$string['simpleview'] = 'Simple view';
$string['sitewide'] = 'Site-wide';
$string['sort'] = 'sort';
$string['sortasc'] = 'Sort in ascending order';
$string['sortdesc'] = 'Sort in descending order';
$string['sortbyfirstname'] = 'Sort by first name';
$string['sortbylastname'] = 'Sort by last name';
$string['standarddeviation'] = 'Standard deviation';
$string['stats'] = 'Statistics';
$string['statslink'] = 'Stats';
$string['student'] = 'Student';
$string['studentsperpage'] = 'Students per page';
$string['subcategory'] = 'Normal category';
$string['submissions'] = 'Submissions';
$string['submittedon'] = 'Submitted: $a';
$string['switchtofullview'] = 'Switch to full view';
$string['switchtosimpleview'] = 'Switch to simple view';
$string['synclegacygrades'] = 'Synchronise legacy grades';
$string['tabs'] = 'Tabs';
$string['topcategory'] = 'Super category';
$string['total'] = 'Total';
$string['totalweight100'] = 'The total weight is equal to 100';
$string['totalweightnot100'] = 'The total weight is not equal to 100';
$string['turnfeedbackoff'] = 'Turn feedback off';
$string['turnfeedbackon'] = 'Turn feedback on';
$string['typenone'] = 'None';
$string['typescale'] = 'Scale';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Value';
$string['updatedgradesonly'] = 'Export new or updated grades only';
$string['uncategorised'] = 'Uncategorised';
$string['unchangedgrade'] = 'Grade unchanged';
$string['unenrolledusersinimport'] = 'This import included the following grades for users not currently enrolled in this course: $a';
$string['unlimitedgrades'] = 'Unlimited grades';
$string['unlock'] = 'Unlock';
$string['unlockverbose'] = 'Unlock $a->category$a->itemmodule $a->itemname';
$string['unused'] = 'Unused';
$string['uploadgrades'] = 'Upload grades';
$string['useadvanced'] = 'Use Advanced Features';
$string['usedcourses'] = 'Used courses';
$string['usedgradeitem'] = 'Used grade item';
$string['usenooutcome'] = 'Use no outcome';
$string['usenoscale'] = 'Use no scale';
$string['usepercent'] = 'Use percent';
$string['user'] = 'User';
$string['usergrade'] = 'User $a->fullname ($a->useridnumber) on item $a->gradeidnumber';
$string['userkeyhelp'] = 'Select a saved key that will give users access to the data published by this export plugin, without having to log into Moodle. Select `create a new user key` to generate a new key when submitting this form.';
$string['userpreferences'] = 'User preferences';
$string['useweighted'] = 'Use weighted';
$string['verbosescales'] = 'Verbose scales';
$string['viewbygroup'] = 'Group';
$string['viewgrades'] = 'View grades';
$string['warningexcludedsum'] = 'Warning: excluding of grades is not compatible with sum aggregation.';
$string['weight'] = 'weight';
$string['weightuc'] = 'Weight';
$string['weightcourse'] = 'Use weighted grades for course';
$string['weightedascending'] = 'Sort by weighted percent ascending';
$string['weighteddescending'] = 'Sort by weighted percent descending';
$string['weightedpct'] = 'weighted %%';
$string['weightedpctcontribution'] = 'weighted %% contribution';
$string['weightorextracredit'] = 'Weight or extra credit';
$string['weights'] = 'Weights';
$string['weightsedit'] = 'Edit weights and extra credits';
$string['writinggradebookinfo'] = 'Writing gradebook settings';
$string['xml'] = 'XML';
$string['yes'] = 'Yes';
$string['yourgrade'] = 'Your grade';
?>
