# DellHealth

This is a shared repository between Lumina Datamatics and the UTx Team.  The repository branches are structured as follows:

<b>master</b>:  This is where approved "production" code resides.  Code should only be pushed here by a repository owner after acceptance by QA from staging.

<b>staging</b>:  This is where code is made available for testing outside the core developers (eg. QA, key stakeholders).  Code should only be pushed here by a repository owner after review and approval from the dev branch.

<b>dev</b>:  This is where working code from individual development branches is merged. Code should only be pushed here after an internal code review by a repo owner.

<b>dev-larry, dev-jared, etc.</b>:  These are the code branches for individual developers/teams on the project.  Any candidates for push to the dev branch should be deployed here. Individual developer branches should be cloned from the dev branch and use the naming convention dev-<first name of developer or team>
