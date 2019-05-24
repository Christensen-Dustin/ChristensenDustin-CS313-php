-- Family Table
create table family (
    family_pk           serial not null primary key,                -- family ID
    family_chore_fk     int references chore(chore_pk),    -- reference chore ID
    family_goal_fk      int references goal(goal_pk),      -- reference goal ID
    family_reward_fk    int references reward(reward_pk),  -- reference reward ID
    family_parent_fk    int references parent(parent_pk),  -- reference parent ID
    family_child_fk     int references child(child_pk),    -- reference child ID
    family_account_fk   int references account(account_pk) -- reference account ID
);

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