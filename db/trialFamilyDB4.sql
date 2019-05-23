-- Steps continued
insert into steps (steps_details, steps_done, steps_goal_fk)
    values ('Pack lugage', false, 3);

-- Family Table Trial Information
-- Chores
insert into family
(family_chore_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (1, 1, 2, 1);
insert into family
(family_chore_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (2, 1, 1, 1);
insert into family
(family_chore_fk, family_child_fk, family_account_fk)
    values (3, 2, 1);
insert into family
(family_chore_fk, family_child_fk, family_account_fk)
    values (4, 2, 1);
insert into family
(family_chore_fk, family_child_fk, family_account_fk)
    values (5, 1, 1);
insert into family
(family_chore_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (6, 1, 2, 1);

-- Rewards
insert into family
(family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (1, 2, 2, 1);
insert into family
(family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (2, 2, 1, 1);
insert into family
(family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (3, 2, 2, 1);
insert into family
(family_reward_fk, family_parent_fk, family_child_fk, family_account_fk)
    values (4, 1, 1, 1);
insert into family
(family_reward_fk, family_child_fk, family_account_fk)
    values (5, 1, 1);
insert into family
(family_reward_fk, family_child_fk, family_account_fk)
    values (6, 2, 1);

-- Goal
-- Add to another file, if it is needed.