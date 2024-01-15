-- TYPO3 ext_tables.sql for dmi_table_creator Extension

CREATE TABLE tx_dmitablecreator_domain_model_tablecontent (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    starttime int(11) DEFAULT '0' NOT NULL,
    endtime int(11) DEFAULT '0' NOT NULL,

    -- Custom fields for the table content element
    number_of_rows int(11) DEFAULT '0',
    number_of_columns int(11) DEFAULT '0',

    PRIMARY KEY (uid),
    KEY parent (pid)
);

-- Add more table definitions or fields as required by the extension.