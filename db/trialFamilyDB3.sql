-- Steps Table Trial Information
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Save money', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Make reservations', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Pack lugage', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Place hold on mail', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Ask Carol to watch Lucy', false, 3);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Save money', false, 2);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Call relatives', false, 2);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Plan dinner', false, 2);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Assign Side Dishes', false, 2);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Arrange for additional chairs and tables', false, 2);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('See what is playing', false, 1);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Select Concerts', false, 1);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Save money', false, 1);
insert into steps (steps_details, steps_done, steps_goal-fk)
    values ('Order Tickets', false, 1);

-- Family Table Trial Information
-- Chores
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (1, 0, 0, 1, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (2, 0, 0, 1, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (3, 0, 0, 0, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (4, 0, 0, 0, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (5, 0, 0, 0, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (6, 0, 0, 1, 2, 1);

-- Rewards
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 1, 2, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 2, 2, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 3, 2, 2, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 4, 1, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 5, 0, 1, 1);
insert into family
(family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (0, 0, 6, 0, 2, 1);

-- Goal
-- Add to another file, if it is needed.