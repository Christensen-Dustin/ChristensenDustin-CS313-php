-- Account Table Trial Identifier
insert into account (account_marker) values ('chris05232019');

-- Parent Table Trial Information
insert into parent
    (parent_fname, parent_lname, parent_bday, parent_display, parent_password)
        values ('Dustin', 'Christensen', '1977-06-25', 'Dad', 'BYUI2019');
insert into parent
    (parent_fname, parent_lname, parent_bday, parent_display, parent_password)
        values ('Jean', 'Christensen', '1976-08-26', 'Mom', 'BYU1998');

-- Child Table Trial Information
insert into child
    (child_fname, child_lname, child_bday, child_display, child_password)
        values ('Faith', 'Christensen', '2004-07-20', 'Daughter', 'BYU2026');
insert into child
    (child_fname, child_lname, child_bday, child_display, child_password)
        values ('Garrison', 'Christensen', '2004-07-30', 'Son', 'BYUI2033');
insert into child
    (child_fname, child_lname, child_bday, child_display, child_password)
        values ('Lucy', 'Christensen', '2018-11-08', 'Little Dog', 'schooloflife');
