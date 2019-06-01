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

select parent_pk, parent_display, family_pk, chore_name, family_chore_fk, family_parent_fk from parent inner join family on family_parent_fk = parent_pk inner join chore on family_chore_fk = chore_pk where parent_pk=1;

-- goalSteps connection
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (3, 1);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (3, 2);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (3, 3);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (3, 4);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (3, 5);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (2, 1);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (2, 6);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (2, 7);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (2, 8);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (2, 9);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (1, 10);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (1, 11);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (1, 1);
insert into goalSteps (goalSteps_goal_fk, goalSteps_steps_fk)
    values (1, 12);