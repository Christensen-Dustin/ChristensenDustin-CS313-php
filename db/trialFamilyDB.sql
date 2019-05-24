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
        values ('Lucy', 'Christensen', '2018-11-08', 'LittleDog', 'schooloflife');
-- Chore Table Trial Information
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', false, true, false, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Wash laundry', 'All laundry has to be washed, folded, and put away', true, true, false, '2019-05-25');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Sweep Patio', 'Patio must be swept and organized', true, true, false, '2019-05-25');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Feed Lucy', 'Make sure Lucy gets fed and fresh water', true, true, false, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Wash dishes', 'Dishes must be washed after the last meal of the day', true, true, false, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Clean Bathroom', 'Tub, Toilet, Counter, mirror and floor must be cleaned', false, true, false, '2019-05-25');

-- Reward Table Trial Information
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', false, true, false, '2019-08-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick a restaurant', 'Gets to pick the restaurant for the next family meal out', false, true, false, '2019-06-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick a game', 'Gets to pick the game the family plays for family night', false, true, false, '2019-07-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pass a chore', 'Gets to pass off a single chore, one time, to another family member', false, true, false, '2019-06-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Breakfast with a Parent', 'Gets to go out to breakfast with parent of choice', false, true, false, '2019-07-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Lunch with a Parent', 'Gets to go out to lunch with a parent of choice', false, true, false, '2019-09-23');

-- Goal Table Trial Information
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Hollywood Bowl Concerts', 'Buying packs of tickets for the summer concert season', true, false, true, '2019-06-07');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Thanksgiving Dinner', 'Plan on hosting the dinner this year', true, false, false, '2019-11-28');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Family Vacation', 'Annual trip to Washington State', true, true, false, '2019-06-13');

-- Steps Table Trial Information
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Save money', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Make reservations', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Pack lugage', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Place hold on mail', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Ask Carol to watch Lucy', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Save money', false, 2);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Call relatives', false, 2);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Plan dinner', false, 2);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Assign Side Dishes', false, 2);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Arrange for additional chairs and tables', false, 2);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('See what is playing', false, 1);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Select Concerts', false, 1);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Save money', false, 1);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Order Tickets', false, 1);

-- Family Table Trial Information
-- Chores
insert into family (family_chore_fk, family_parent_fk, family_account_fk)
    values (1, 1, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (1, 2, 1);
insert into family (family_chore_fk, family_parent_fk, family_account_fk)
    values (2, 1, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (2, 1, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (3, 2, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (4, 2, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (5, 1, 1);
insert into family (family_chore_fk, family_parent_fk, family_account_fk)
    values (6, 1, 1);
insert into family (family_chore_fk, family_child_fk, family_account_fk)
    values (6, 2, 1);

-- Rewards
insert into family (family_reward_fk, family_parent_fk, family_account_fk)
    values (1, 2, 1);
insert into family (family_reward_fk, family_child_fk, family_account_fk)
    values (1, 2, 1);
insert into family (family_reward_fk, family_parent_fk, family_account_fk)
    values (2, 2, 1);
insert into family (family_reward_fk, family_child_fk, family_account_fk)
    values (3, 2, 1);
insert into family (family_reward_fk, family_parent_fk, family_account_fk)
    values (4, 1, 1);
insert into family (family_reward_fk, family_child_fk, family_account_fk)
    values (4, 1, 1);
insert into family (family_reward_fk, family_child_fk, family_account_fk)
    values (5, 1, 1);
insert into family (family_reward_fk, family_child_fk, family_account_fk)
    values (6, 2, 1);

-- Goal
-- Add to another file, if it is needed.