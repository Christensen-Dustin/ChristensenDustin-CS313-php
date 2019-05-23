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

-- Chore Table Trial Information
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', 0, 1, 0, '2019-05-23');

-- Reward Table Trial Information
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-05-23');

-- Goal Table Trial Information
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Family Vacation', 'Annual trip to Washington State', 1, 1, 0, '2019-06-13');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Family Vacation', 'Annual trip to Washington State', 1, 1, 0, '2019-06-13');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Family Vacation', 'Annual trip to Washington State', 1, 1, 0, '2019-06-13');

-- Steps Table Trial Information
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Save money', 0, );
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Make reservations', 0, );
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Pack lugage', 0, );
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Place hold on mail', 0, );
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Ask Carol to watch Lucy', 0, );
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Save money', 0, );

-- Family Table Trial Information
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values ();