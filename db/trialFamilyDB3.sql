-- Steps Table Trial Information
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Save money', false, 3);
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Make reservations', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
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
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (1, , , 1, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (2, , , 1, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (3, , , , 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (4, , , , 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (5, , , , 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (6, , , 1, 2, 1);

-- Rewards
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 1, 2, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 2, 2, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 3, 2, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 4, 1, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 5, , 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (, , 6, , 2, 1);

-- Goal
-- Add to another file, if it is needed.